<?php

namespace App\Http\Controllers;

use App\Models\CourseIndustry;
use Illuminate\Http\Request;

class CourseIndustriesController extends Controller
{
    public function list()
    {
        try {
            $industries = CourseIndustry::all();

            return response()->json([
                'data' => $industries,
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
