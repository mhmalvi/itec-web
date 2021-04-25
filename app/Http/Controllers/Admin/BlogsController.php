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
            $newName = null;

            $slug = SlugService::createSlug(Blog::class, 'blog_slug', $request->blog_title);

            if ($request->hasFile('thumbnail')) {
                //Get the file name without extension
                $image = $request->file('thumbnail');
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $ext = $image->getClientOriginalExtension();
                $random = uniqid();

                $newName = "{$imagename}_{$random}.{$ext}";

                //check if directory exist or not
                if (!Storage::exists("public/blogs")) {
                    Storage::makeDirectory("public/blogs");
                }
                Storage::putFileAs('public/blogs', $image, $newName);
            }

            $blog = Blog::create([
                'action_user' => Auth::id(),
                'blog_categories_id' => $request->category_id,
                'blog_title' => $request->blog_title,
                'blog_slug' => $slug,
                'blog_des' => $request->details,
                'meta_des' => $request->meta_des,
                'thumbnail' => $newName,
                'isPublished' => ($request->publish === 'on') ? 1 : 0
            ]);

            if ($request->filled('meta_tags') && $blog->id) {
                $this->tags($request->meta_tags, $blog->id);
            }

            if ($request->filled('meta_keys') && $blog->id) {
                $this->keywords($request->meta_keys, $blog->id);
            }

            $notification = [
                'message'   =>  'Successfully Saved.',
                'alert-type'    =>  'success'
            ];

            return redirect()->back()->with($notification);
        } catch (\Throwable $th) {
            $notification = [
                // 'message'   =>  'oops! Something went wrong',
                'message' => $th->getMessage(),
                'alert-type'    =>  'warning'
            ];

            return redirect()->back()->with($notification);
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
}
