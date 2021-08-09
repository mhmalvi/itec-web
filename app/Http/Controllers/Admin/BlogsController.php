<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
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

            $request->save();

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
     * Share image in blog body
     */
    public function shareimg(Request $request)
    {
        if ($request->hasFile('file')) {
            $fileName = $request->file('file')->getClientOriginalName();

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
