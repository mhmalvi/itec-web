<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoriesController extends Controller
{
    /**
     * @return View
     * 
     */
    public function index()
    {
        return view('admin.BlogCategory.index');
    }


    /**
     * @param $request
     * 
     */
    public function create(Request $request)
    {
        $category = BlogCategory::firstOrCreate([
            'title' => $request->blog_category
        ]);

        if ($category->id) {
            return response()->json([
                'data' => $category,
                'status' => 200
            ]);
        }
    }
}
