<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;

class MailsController extends Controller
{
    /**
     * 
     */
    public function testMail()
    {
        SendEmailJob::dispatch()
            ->delay(now()->addSeconds(5));

        return back();
    }



    /**
     * 
     */
    public function appointment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:50',
            'msg' => 'max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
                'status' => 422
            ]);
        }

        $data = [
            'Name' => $request->name,
            'Email' => $request->email,
            'Phone' => $request->phone,
            'Date' => $request->date,
            'Msg' => $request->msg
        ];

        // SendEmailJob::dispatch($data)->delay(now()->addSeconds(5));
        Mail::to('rajin.uxid@gmail.com')->send(new AppointmentMail($data));

        return response()->json([
            'status' => 200
        ]);
    }
}
