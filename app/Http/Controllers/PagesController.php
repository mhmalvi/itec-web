<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * @return view
     */
    public function __invoke()
    {
        return view('Pages.' . request()->segment(1));
    }


    /**
     * @return View
     */
    public function index()
    {
        return view('Pages.Index');
    }


    /**
     * @return View
     * 
     */
    public function blogs()
    {
        $blogs = Blog::with('user')->orderBy('created_at', 'desc')->paginate('6');
        return view('Pages.blogs', compact('blogs'));
    }



    /**
     * @return View
     * 
     */
    public function blogDetail($slug)
    {
        $blog = Blog::with('user')->where('blog_slug', $slug)->first();
        $metaTags = DB::table('blogs_meta_tags')->where('blogs_id', $blog->id)->get();
        $metaKeys = DB::table('blogs_meta_keywords')->where('blogs_id', $blog->id)->get();
        return view('Pages.blog', compact('blog', 'metaTags', 'metaKeys'));
    }
}
