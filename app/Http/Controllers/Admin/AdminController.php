<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * @return View
     * 
     */
    public function index()
    {
        return view('admin.dashboard');
    }


    public function test(Request $request)
    {
        $file = $request->file('file');
        $name = $request->name;

        Storage::putFileAs('public/blogs', $file, $name);

        $url = asset(Storage::url("public/blogs/{$name}"));

        return response()->json(['url' => $url], 201);
    }
}
