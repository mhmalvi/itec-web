<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
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
            $notification = [
                // 'message'   =>  'oops! Something went wrong',
                'message' => $th->getMessage(),
                'alert-type'    =>  'warning'
            ];

            return response()->json($notification, 500);
        }
    }



    /**
     * Share image in blog body
     */
    public function shareimg(Request $request)
    {
        if ($request->hasFile('file')) {
            $fileName = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
            // $fileExt = $request->file('file')->getClientOriginalExtension();

            $request->file('file')->move(public_path('blogImages'), $fileName);

            $url = asset('blogImages/' . $fileName);


            return response()->json(['location' => $url])->header('content-type', 'application/json');
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
    public function update(BlogUpdateRequest $request, $id)
    {
        try {
            $request->update(Blog::findOrFail($id));

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
