<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Http\Resources\CoursesCollection;
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

    public function getPaginatedList()
    {
        try {
            $search = request()->filled('search') ? request()->get('search') : '';
            $per_page = request()->filled('per_page') ? request()->get('per_page') : 10;

            return new CoursesCollection(
                Course::where('course_name', 'like', '%' . $search . '%')
                    ->orWhere('course_code', 'like', '%' . $search . '%')
                    ->latest()
                    ->paginate($per_page)
            );
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong while fetching the courses!"
            ], 500);
        }
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
        $request->validate([
            "category" => "required",
            "course_code" => "required|unique:courses,course_code",
            "course_title" => "required",
            "industry" => "required",
        ]);
        try {
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
            $course->isPublished = $request->is_published;

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


    public function edit(Course $course)
    {
        $categories = CourseCategory::all();
        $industries = CourseIndustry::all();
        $course = new CourseResource($course);
        return view('admin.courses.edit', compact('course', 'categories', 'industries'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            "category" => "required",
            "course_code" => "required|unique:courses,course_code," . $course->id,
            "course_title" => "required",
            "industry" => "required",
        ]);

        try {
            $category = CourseCategory::find($request->category);
            $industry = CourseIndustry::find($request->industry);

            $new_image_name = null;

            if ($request->filled('thumbnail')) {
                $this->deleteThumbnail($course);
                $new_image_name = $this->saveThumbnail($request->thumbnail, $request->course_title);
                $course->thumbnail = $new_image_name;
            }

            $course->course_code = $request->course_code;
            $course->course_name = $request->course_title;
            $course->course_desc = $request->description;
            $course->category()->associate($category);
            $course->courseIndustry()->associate($industry);
            $course->isPublished = $request->is_published;

            $course->save();

            return response()->json([
                'message' => 'Course Updated Successfully'
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong while updating the course!",
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    public function destroy(Course $course)
    {
        try {
            $this->deleteThumbnail($course);
            $course->delete();

            return response()->json([
                'message' => "Course Deleted Successfully",
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong while deleting the course!",
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    private function saveThumbnail($image, $title)
    {
        $ext = $this->getClientOriginalExtension($image);
        $name = Str::slug($title);

        $new_image_name = time() . "_{$name}{$ext}";

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

    private function deleteThumbnail(Course $course)
    {
        Storage::delete('public/courses/' . $course->thumbnail);
    }
}
