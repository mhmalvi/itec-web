<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribeMail;
use Illuminate\Support\Facades\Validator;

class SubscribesController extends Controller
{
    /**
     * 
     */
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return json_encode([
                'errors' => $validator->errors()->all(),
                'status' => 422
            ], JSON_FORCE_OBJECT);
        }

        try {
            Subscribe::create([
                'email' => $request->email
            ]);

            Mail::to('dev.quadque@gmail.com')->send(new SubscribeMail([
                'email' => $request->email
            ]));

            return json_encode([
                'success' => 'Thanks for your subscription',
                'status' => 200
            ], JSON_FORCE_OBJECT);
        } catch (\Throwable $th) {
            return json_encode([
                'error' => $th->getMessage(),
                'status' => 422
            ], JSON_FORCE_OBJECT);
        }
    }
}
