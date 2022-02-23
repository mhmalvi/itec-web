<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseIndustry;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    /**
     * @return view
     */
    public function __invoke()
    {
        return view('pages.' . request()->segment(1));
    }


    /**
     * @return View
     */
    public function index()
    {
        $industries = CourseIndustry::with('courses')->get();
        return view('pages.Index', compact('industries'));
    }


    /**
     * @return View
     *
     */
    public function blogs()
    {
        $blogs = Blog::with(['user', 'category'])->orderBy('created_at', 'desc')->paginate('5');
        $industries = CourseIndustry::all();

        return view('pages.blogs', compact('blogs', 'industries'));
    }



    /**
     * @return View
     *
     */
    public function blogDetail($slug)
    {
        $blog = Blog::with('user')->where('blog_slug', $slug)->first();
        return view('pages.blog', compact('blog'));
    }



    /**
     * @return View
     *
     */
    public function rpl()
    {
        $industries = CourseIndustry::with('courses')->get();
        return view('pages.rpl', compact('industries'));
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

        return view('pages.courses', compact('industry', 'courses', 'industries'));
    }



    /**
     * @return View
     *
     */
    public function course($slug)
    {
        $course = Course::with('courseIndustry')->where('course_code', $slug)->first();
        if ($course->courseIndustry == null) {
            return redirect()->route('index');
        }
        return view('pages.course-single', compact('course'));
    }



    /**
     *
     */
    public function downloadFile($file)
    {
        return Storage::download("public/checklists/{$file}");
    }



    /**
     *
     */
    public function training()
    {
        $columns = ['course_name', 'course_code', 'thumbnail'];

        $full = Course::with('qualifications')->select($columns)->where('qualification_id', 1)->limit(6)->get();
        $short = Course::with('qualifications')->select($columns)->where('qualification_id', 2)->limit(6)->get();

        return view('pages.training', compact('full', 'short'));
    }


    /**
     *
     */
    public function fullQualifications()
    {
        $columns = ['course_name', 'course_code', 'thumbnail'];
        $full = Course::with('qualifications')->select($columns)->where('qualification_id', '1')->paginate(12);

        return view('pages.fullQualifications', compact('full'));
    }


    /**
     *
     */
    public function shortCourses()
    {
        $columns = ['course_name', 'course_code', 'thumbnail'];
        $short = Course::with('qualifications')->select($columns)->where('qualification_id', '2')->paginate(12);

        return view('pages.shortCourses', compact('short'));
    }
}
