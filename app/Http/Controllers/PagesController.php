<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * @return view
     */
    public function __invoke()
    {
        return view('Pages.' . request()->segment(1));
    }


    /**
     * @return View
     */
    public function index()
    {
        return view('Pages.Index');
    }
}
