<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    /**
     * @return View
     * 
     */
    public function index()
    {
        $blogs = Blog::with('category')->orderBy('created_at', 'desc')->get();
        return view('admin.blogs.index', compact('blogs'));
    }



    /**
     * @return view
     * 
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.create', compact('categories'));
    }



    /**
     * @param $request
     * 
     */
    public function store(BlogRequest $request)
    {
        try {
            $newImg = null;
            $newThumb = null;

            $slug = SlugService::createSlug(Blog::class, 'blog_slug', $request->blog_title);
            $category = BlogCategory::where('title', $request->category_id)->first();

            if (($request->hasFile('thumbnail')) && ($request->hasFile('img'))) {
                //Get the file name without extension
                $thumb = $request->file('thumbnail');
                $thumbName = trim(pathinfo($thumb->getClientOriginalName(), PATHINFO_FILENAME));
                $ext = $thumb->getClientOriginalExtension();

                $image = $request->file('img');
                $imageName = trim(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME));
                $ext = $image->getClientOriginalExtension();

                $random = uniqid();

                $newThumb = "{$thumbName}_{$random}.{$ext}";
                $newImg = "{$imageName}_{$random}.{$ext}";

                //check if directory exist or not
                if (!Storage::exists("public/blogs")) {
                    Storage::makeDirectory("public/blogs");
                }
                Storage::putFileAs('public/blogs', $thumb, $newThumb);
                Storage::putFileAs('public/blogs', $image, $newImg);
            }

            $blog = Blog::create([
                'action_user' => Auth::id(),
                'blog_categories_id' => $category->id,
                'blog_title' => $request->blog_title,
                'blog_slug' => $slug,
                'blog_des' => $request->details,
                'meta_des' => $request->meta_des,
                'thumbnailOne' => $newImg,
                'thumbnailTwo' => $newThumb,
                'isPublished' => ($request->publish === 'on') ? 1 : 0
            ]);


            if ($request->filled('meta_tags') && $request->has('meta_tags')) {
                $this->tags($request->meta_tags, $blog->id);
            }

            if ($request->filled('meta_keys') && $request->has('meta_keys')) {
                $this->keywords($request->meta_keys, $blog->id);
            }

            $notification = [
                'message'   =>  'Successfully Saved.',
                'alert-type'    =>  'success'
            ];

            return back()->with($notification);
        } catch (\Throwable $th) {
            $notification = [
                // 'message'   =>  'oops! Something went wrong',
                'message' => $th->getMessage(),
                'alert-type'    =>  'warning'
            ];

            return back()->with($notification);
        }
    }


    /**
     * Save Meta Tags
     * 
     */
    protected function tags(array $tags, int $blogId): void
    {
        foreach ($tags as $tag) {
            DB::table('blogs_meta_tags')->insert([
                'action_user' => Auth::id(),
                'blogs_id' => $blogId,
                'tags' => $tag
            ]);
        }
    }


    /**
     * Save Meta Keywords
     * 
     */
    protected function keywords(array $keywords, int $blogId): void
    {
        foreach ($keywords as $keyword) {
            DB::table('blogs_meta_keywords')->insert([
                'action_user' => Auth::id(),
                'blogs_id' => $blogId,
                'keywords' => $keyword
            ]);
        }
    }


    /**
     * @param Slug
     * 
     */
    public function edit($slug)
    {
        try {
            $categories = BlogCategory::all();
            $blog = Blog::where('blog_slug', $slug)->first();

            return view('admin.blogs.update', compact('blog', 'categories'));
        } catch (\Throwable $th) {
            $notification = [
                'message'   =>  'oops! Something went wrong',
                'alert-type'    =>  'warning'
            ];

            return back()->with($notification);
        }
    }



    /**
     * 
     */
    public function update(Request $request, $id)
    {
        $slug = SlugService::createSlug(Blog::class, 'blog_slug', $request->blog_title);
        $category = BlogCategory::where('title', $request->category_id)->first();

        try {
            $blog = Blog::findOrFail($id);

            $blog->blog_categories_id = $category->id;
            $blog->blog_title = $request->blog_title;
            $blog->blog_slug = $slug;
            $blog->blog_des = $request->details;
            $blog->meta_des = $request->meta_des;
            $blog->isPublished = ($request->publish === 'on') ? 1 : 0;

            if (($request->hasFile('thumbnail'))) {
                //Get the file name without extension
                $thumb = $request->file('thumbnail');
                $thumbName = trim(pathinfo($thumb->getClientOriginalName(), PATHINFO_FILENAME));
                $ext = $thumb->getClientOriginalExtension();

                $random = uniqid();

                $newThumb = "{$thumbName}_{$random}.{$ext}";

                $blog->thumbnailTwo = $newThumb;

                Storage::delete('public/blogs', $blog->thumbnailTwo);

                Storage::putFileAs('public/blogs', $thumb, $newThumb);
            }

            if (($request->hasFile('img'))) {
                //Get the file name without extension
                $image = $request->file('img');
                $imageName = trim(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME));
                $ext = $image->getClientOriginalExtension();

                $random = uniqid();

                $newImg = "{$imageName}_{$random}.{$ext}";

                $blog->thumbnailOne = $newImg;

                Storage::delete('public/blogs', $blog->thumbnailOne);

                Storage::putFileAs('public/blogs', $image, $newImg);
            }


            if ($request->filled('meta_tags') && $request->has('meta_tags')) {
                $this->tags($request->meta_tags, $blog->id);
            }

            if ($request->filled('meta_keys') && $request->has('meta_keys')) {
                $this->keywords($request->meta_keys, $blog->id);
            }

            $blog->save();

            $notification = [
                'message'   =>  'Scuccessfully updated',
                'alert-type'    =>  'success'
            ];

            return redirect()->route('admin.blogs')->with($notification);
        } catch (\Throwable $th) {
            $notification = [
                'message'   =>  $th->getMessage(),
                'alert-type'    =>  'warning'
            ];

            return back()->with($notification);
        }
    }


    /**
     * @param Slug
     * 
     */
    public function destroy($slug)
    {
        try {
            $blog = Blog::where('blog_slug', $slug)->first();

            $blog->delete();

            $notification = [
                'message'   =>  'Scuccessfully removed!',
                'alert-type'    =>  'success'
            ];

            return back()->with($notification);
        } catch (\Throwable $th) {
            $notification = [
                'message'   =>  'oops! Something went wrong',
                'alert-type'    =>  'warning'
            ];

            return back()->with($notification);
        }
    }
}
