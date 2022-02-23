<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\IndustriesCollection;
use App\Models\CourseIndustry;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index()
    {
        return view('admin.industries.index');
        // try {
        // } catch (\Throwable $th) {
        //     return response()->json([
        //         'message' => "Something went wrong while fetching the industries",
        //         'error' => $th->getMessage(),
        //     ], 500);
        // }
    }
}
