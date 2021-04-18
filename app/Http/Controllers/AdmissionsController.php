<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionsController extends Controller
{
    /**
     * @return View
     * 
     */
    public function __invoke()
    {
        return view('Pages.' . request()->segment(2));
    }
}
