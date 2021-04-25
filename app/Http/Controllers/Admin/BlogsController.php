<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * @return view
     * 
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.create', compact('categories'));
    }



    /**
     * @param $request
     * 
     */
    public function store(Request $request)
    {
        dd($request->all());
    }
}
