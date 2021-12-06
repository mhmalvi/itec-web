<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordChangeRequest;

class UsersController extends Controller
{
    /**
     * Update Profile
     */
    public function updateProfile(ProfileUpdateRequest $request)
    {
        try {
            $request->save();

            return response()->json(['message' => 'success'], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'something went wrong!', 'stack' => $th->getMessage()], 503);
        }
    }

    /**
     * Change Password
     */
    public function changePassword(PasswordChangeRequest $request)
    {
        try {
            $request->save();

            return response()->json(['message' => 'success'], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'something went wrong!', 'stack' => $th->getMessage()], 503);
        }
    }
}
