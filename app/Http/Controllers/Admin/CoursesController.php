<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseIndustry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    /**
     * @return View
     * 
     */
    public function index()
    {
        return view('admin.Course.index');
    }



    /**
     * @return Json Response
     * 
     */
    public function createCategory(Request $request)
    {
        $category = CourseCategory::firstOrCreate([
            'title' => $request->category_name
        ]);

        if ($category->id) {
            return response()->json([
                'data' => $category,
                'status' => 200
            ]);
        }
    }



    /**
     * @return Json response
     * 
     */
    public function createIndustry(Request $request)
    {
        $industry = CourseIndustry::firstOrCreate([
            'title' => $request->industry_name
        ]);

        if ($industry->id) {
            return response()->json([
                'data' => $industry,
                'status' => 200
            ]);
        }
    }



    /**
     * @return view
     * 
     */
    public function create()
    {
        $categories = CourseCategory::all();
        $industries = CourseIndustry::all();
        return view('admin.Course.create', compact('categories', 'industries'));
    }



    /**
     * @param Form Data
     * 
     * 
     */
    public function store(Request $request)
    {
        //Get the file name without extension
        $image = $request->thumbnail;
        $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $ext = $image->getClientOriginalExtension();
        $random = uniqid();

        $newName = "{$imagename}_{$random}.{$ext}";

        //check if directory exist or not
        if (!Storage::exists("public/courses")) {
            Storage::makeDirectory("public/courses");
        }
        Storage::putFileAs('public/courses', $image, $newName);

        $course = Course::create([
            'action_user' => Auth::id(),
            'course_code' => $request->course_code,
            'course_name' => $request->course_title,
            'course_categories_id' => $request->category,
            'course_industries_id' => $request->industry,
            'course_desc' => $request->details,
            'thumbnail' => $newName,
            'isPublished' => ($request->publish === 'on') ? 1 : 0
        ]);

        dd($course);
    }
}
