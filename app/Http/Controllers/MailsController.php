<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Http\Requests\RplFormRequest;
use App\Jobs\SendEmailJob;
use App\Mail\ApplyMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;
use App\Mail\RplMail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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
     * Appointment Booking
     */
    public function appointment(AppointmentRequest $request)
    {
        $data = [
            'Name' => $request->name,
            'Email' => $request->email,
            'Phone' => $request->contact,
            'Date' => $request->date,
            'Msg' => $request->msg
        ];

        Mail::to('dev.quadque@gmail.com')->cc('tousif@quadque.tech')->send(new AppointmentMail($data));

        return response()->json([
            'status' => 'Success'
        ], 200);
    }



    /**
     * RPL Eligibility Check
     */
    public function rpl(RplFormRequest $request)
    {
        $filePath = [];

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
            'course' => $request->courses,
            'remark' => $request->remark
        ];

        if ($request->hasFile('files') && count($request->file('files')) > 0) {
            $files = $request->file('files');

            foreach ($files as $file) {
                $fileName = $file->getClientOriginalName();
                /**
                 * Check if derectory exist or not
                 * Create a new directory if not exist
                 */

                if (!Storage::exists("public/rpl")) {
                    Storage::makeDirectory("public/rpl");
                }

                //store image into storage directory
                Storage::putFileAs('public/rpl/', $file, $fileName);

                array_push($filePath, public_path('storage/rpl/' . $fileName));
            }
        }

        Mail::to('dev.quadque@gmail.com')->cc('tousif@quadque.tech')->send(new RplMail($data, $filePath));

        if ($request->hasFile('files') && count($request->file('files')) > 0) {
            Storage::delete('public/rpl/' . $fileName);
        }

        return response()->json(['success' => 'success'], 200);
    }


    /**
     * Apply Now
     */
    public function applied(Request $request)
    {
        $data = [
            'Study' => $request->study,
            'Name' => $request->name,
            'Email' => $request->email,
            'Phone' => $request->contact,
            'Nationality' => $request->nationality,
            'Qualification' => $request->qualification
        ];

        Mail::to('dev.quadque@gmail.com')->cc('tousif@quadque.tech')->send(new ApplyMail($data));

        return response()->json([
            'status' => 'Success'
        ], 200);
    }
}
