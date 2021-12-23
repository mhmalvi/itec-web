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
        return view('pages.' . request()->segment(2));
    }
}
