<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Str;
use App\Models\CourseCategory;
use App\Models\CourseIndustry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
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
        return view('admin.courses.index', compact('courses'));
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
        return view('admin.courses.create', compact('categories', 'industries'));
    }



    /**
     * @param Form Data
     *
     *
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                "category" => "required",
                "course_code" => "required",
                "course_title" => "required",
                "industry" => "required",
            ]);
            $category = CourseCategory::find($request->category);
            $industry = CourseIndustry::find($request->industry);

            $new_image_name = null;

            if ($request->filled('thumbnail')) {
                $new_image_name = $this->saveThumbnail($request->thumbnail, $request->course_title);
            }

            $course = new Course;

            $course->action_user = Auth::id();
            $course->course_code = $request->course_code;
            $course->course_name = $request->course_title;
            $course->course_desc = $request->description;
            $course->thumbnail = $new_image_name;
            $course->category()->associate($category);
            $course->courseIndustry()->associate($industry);
            $course->isPublished = $request->isPublished;

            $course->save();

            return response()->json([
                'message' => 'Course Created Successfully'
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json([
                'message' => $th->getMessage(),
            ], 500);
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

    private function saveThumbnail($image, $title)
    {
        $ext = $this->getClientOriginalExtension($image);
        $name = Str::slug($title);

        $new_image_name = time() . "_{$name}.{$ext}";

        //check if directory exist or not
        if (!Storage::exists("public/courses")) {
            Storage::makeDirectory("public/courses");
        }

        Image::make($image)->save(
            storage_path('app/public/courses/' . $new_image_name)
        );

        return $new_image_name;
    }

    private function getClientOriginalExtension($file)
    {
        $encodedImgString = explode(',', $file, 2)[1];
        $decodedImgString = base64_decode($encodedImgString);
        $info = getimagesizefromstring($decodedImgString);

        $ext = image_type_to_extension($info[2]);

        return $ext;
    }
}
