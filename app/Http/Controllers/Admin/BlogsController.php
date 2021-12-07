<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Http\Resources\BlogResource;
use App\Http\Resources\BlogsCollection;
use Illuminate\Support\Facades\Storage;

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

    public function getPaginatedList(Request $request)
    {
        try {
            $perPage = $request->filled('items') ? $request->items : 10;
            return new BlogsCollection(
                Blog::where('blog_title', 'LIKE', '%' . $request->search . '%')->latest()->paginate($perPage)
            );
        } catch (\Throwable $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function rawItem(Blog $blog)
    {
        try {
            return new BlogResource($blog);
        } catch (\Throwable $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
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
    public function store(BlogCreateRequest $request)
    {
        try {

            $blog = $request->save();

            $link = route('blog.detail', ['slug' => $blog->blog_slug]);
            $state = $blog->isPublished == 1 ? 'saved' : 'drafted';

            $message = "Successfully $state." .
                ($blog->isPublished ? " <a href='$link' target='_blank'>View Post</a>" : '');

            return response()->json([
                'message' => $message,
            ], 200);
        } catch (\Throwable $th) {
            $response = [
                'message' => $th->getMessage(),
            ];

            return response()->json($response, 500);
        }
    }



    /**
     * Share image in blog body
     */
    public function bodyImages(Request $request)
    {
        try {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();

            Storage::putFileAs('public/blogs/', $file, $name);

            $url = asset(Storage::url("public/blogs/{$name}"));

            return response()->json(['url' => $url], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }


    /**
     * @param Slug
     *
     */
    public function edit(Blog $blog)
    {
        try {
            $slug = $blog->blog_slug;

            return view('admin.blogs.update', compact('slug'));
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
    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        try {
            $request->update($blog);

            $message = "Successfully updated.";
            if ($blog->isPublished == 1) {
                $link = route('blog.detail', ['slug' => $blog->blog_slug]);
                $message .= " <a href='$link' target='_blank'>View post</a>";
            }

            return response()->json([
                'message' => $message,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
        }
    }


    /**
     * @param Slug
     *
     */
    public function destroy(Blog $blog)
    {
        try {
            $blog->delete();

            Storage::delete('public/blogs/images/' . $blog->image);

            Storage::delete('public/blogs/thumbnails/' . $blog->thumbnail);

            return response()->json([
                'message' => 'Scuccessfully removed!',
            ], 202);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
            ]);
        }
    }
}
