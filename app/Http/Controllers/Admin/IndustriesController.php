<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\IndustryCreateRequest;
use App\Http\Requests\IndustryDeleteRequest;
use App\Http\Requests\IndustryUpdateRequest;
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
                    ->latest()
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

    public function store(IndustryCreateRequest $request)
    {
        try {
            $request->save();

            return response()->json([
                'message' => "Industry created successfully",
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong.",
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    public function edit(CourseIndustry $industry)
    {
        return view('admin.industries.edit', compact('industry'));
    }

    public function update(CourseIndustry $industry, IndustryUpdateRequest $request)
    {
        try {
            $request->update($industry);

            return response()->json([
                'message' => "Successfully updated the industry",
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong while updating the industry",
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    public function destroy(CourseIndustry $industry, IndustryDeleteRequest $request)
    {
        try {
            $request->delete($industry);

            return response()->json([
                'message' => "Successfully deleted the industry",
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong while deleting the industry",
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
