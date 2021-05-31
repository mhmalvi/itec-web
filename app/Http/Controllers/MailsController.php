<?php

namespace App\Http\Controllers;

use App\Http\Requests\RplFormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;
use App\Mail\RplMail;
use App\Models\Course;

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
        Mail::to('dev.quadque@gmail.com')->send(new AppointmentMail($data));

        return response()->json([
            'status' => 200
        ]);
    }



    /**
     * 
     */
    public function rpl(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'location' => $request->location,
            'qualification' => $request->qualification,
            'relevant' => $request->relevant,
            'work_location' => $request->work_location,
            'designation' => $request->designation,
            'industry' => $request->industry,
            'course' => $request->course,
            'remark' => $request->question
        ];

        // Mail::to('dev.quadque@gmail.com')->send(new RplMail($data));

        return response()->json(['sucess' => 'sucess'], 200);
    }
}
