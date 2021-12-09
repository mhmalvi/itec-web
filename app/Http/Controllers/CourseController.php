<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseIndustry;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * @param Slug
     *
     * @return view
     */
    public function index($slug)
    {
        return view('pages.courses');
    }


    /**
     * @param Slug
     *
     * @return view
     */
    public function course($slug)
    {
        return view('pages.course-single');
    }



    /**
     * @param title
     *
     * @return Json
     *
     */
    public function getCourseByIndustry(Request $request)
    {
        $industry = CourseIndustry::where('title', $request->title)->first();
        $courses = Course::where('course_industries_id', $industry->id)->get();

        return response()->json([
            'data' => $courses->map(function ($res) {
                $data = [
                    'Course' => "{$res->course_code} - {$res->course_name}"
                ];

                return $data;
            }),
            'status' => 200
        ]);
    }
}
