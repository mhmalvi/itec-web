<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseIndustry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $industries = CourseIndustry::with('courses')->get();
        return view('Pages.Index', compact('industries'));
    }


    /**
     * @return View
     * 
     */
    public function blogs()
    {
        $blogs = Blog::with(['user', 'category'])->orderBy('created_at', 'desc')->paginate('3');
        $industries = CourseIndustry::all();
        return view('Pages.blogs', compact('blogs', 'industries'));
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



    /**
     * @return View
     * 
     */
    public function rpl()
    {
        $industries = CourseIndustry::with('courses')->get();
        return view('Pages.rpl', compact('industries'));
    }



    /**
     * @return View
     * 
     */
    public function industry($slug)
    {
        $industries = CourseIndustry::all();
        $categories = CourseCategory::all();
        $industry = CourseIndustry::where('slug', $slug)->first();
        $courses = Course::where('course_industries_id', $industry->id)->get();

        return view('Pages.courses', compact('industry', 'courses', 'industries'));
    }



    /**
     * @return View
     * 
     */
    public function course($slug)
    {
        $course = Course::with('courseIndustry')->where('course_code', $slug)->first();
        return view('Pages.course-single', compact('course'));
    }



    /**
     * 
     */
    public function downloadFile($file)
    {
        return Storage::download("public/checklists/{$file}");
    }
}
