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

    public function getPaginatedList()
    {
        try {
            $per_page = request()->filled('per_page') ? request()->get('per_page') : 10;
            $search = request()->filled('search') ? request()->get('search') : '';

            return new IndustriesCollection(
                CourseIndustry::where('title', 'like', '%' . $search . '%')
                    ->paginate($per_page)
            );
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong while fetching the industries"
            ], 500);
        }
    }

    public function create()
    {
        return view('admin.industries.create');
    }
}
