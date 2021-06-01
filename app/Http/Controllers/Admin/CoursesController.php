<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseIndustry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CoursesController extends Controller
{
    /**
     * @return View
     * 
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.Course.index', compact('courses'));
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
        $industry = CourseIndustry::where('title', $request->industry_name)->first();
        if (isset($industry->id)) {
            return false;
            die();
        }

        $slug = SlugService::createSlug(CourseIndustry::class, 'slug', $request->industry_name);
        $industry = CourseIndustry::updateOrCreate([
            'action_user' => Auth::id(),
            'title' => $request->industry_name,
            'slug' => $slug
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
        try {
            $category = CourseCategory::where('title', $request->category)->first();
            $industry = CourseIndustry::where('title', $request->industry)->first();

            $newName = null;
            $fileName = null;

            if ($request->hasFile('thumbnail')) {
                //Get the file name without extension
                $image = $request->file('thumbnail');
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $ext = $image->getClientOriginalExtension();
                $random = uniqid();

                $newName = "{$imagename}_{$random}.{$ext}";

                //check if directory exist or not
                if (!Storage::exists("public/courses")) {
                    Storage::makeDirectory("public/courses");
                }
                Storage::putFileAs('public/courses', $image, $newName);
            }

            if ($request->hasFile('checklist')) {
                $file = $request->file('checklist');
                $ext = $file->getClientOriginalExtension();
                $fileName = "{$request->course_code}.{$ext}";

                //check if directory exist or not
                if (!Storage::exists("public/checklists")) {
                    Storage::makeDirectory("public/checklists");
                }
                Storage::putFileAs('public/checklists', $file, $fileName);
            }

            Course::create([
                'action_user' => Auth::id(),
                'course_code' => $request->course_code,
                'course_name' => $request->course_title,
                'course_categories_id' => $category->id,
                'course_industries_id' => $industry->id,
                'course_desc' => $request->details,
                'thumbnail' => $newName,
                'checklist' => $fileName,
                'isPublished' => ($request->publish === 'on') ? 1 : 0
            ]);

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


    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $categories = CourseCategory::all();
        $industries = CourseIndustry::all();
        return view('admin.course.update', compact('course', 'categories', 'industries'));
    }



    public function update(Request $request, $id)
    {
        try {
            $course = Course::findOrFail($id);

            $course->course_desc = $request->details;
            $course->rto = $request->rto;

            $course->save();

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
}
