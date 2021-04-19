<?php

namespace App\Http\Controllers;

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
}
