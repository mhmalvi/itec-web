<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoinAsRtoCreateRequest;
use Illuminate\Http\Request;

class JoinAsRtoPartnerController extends Controller
{
    public function store(JoinAsRtoCreateRequest $request)
    {
        try {
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong. Please try again later.",
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
