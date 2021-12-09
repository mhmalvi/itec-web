<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Http\Requests\RplFormRequest;
use App\Jobs\SendEmailJob;
use App\Mail\ApplyMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;
use App\Mail\RplMail;
use App\Models\RplEligibilityRequest;
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
            'contact' => $request->phone,
            'remark' => $request->remarks,
            'q1' => $request->q1,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
            'q6' => $request->q6,
            'q7' => $request->q7,
            'q8' => $request->q8,
            'q9' => $request->q9,
            'q10' => $request->q10,
        ];

        try {
            RplEligibilityRequest::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'contact' => $data['contact'],
                'industry' => $data['q1'],
                'qualification' => $data['q2'],
                'work_experience' => $data['q3'],
                'work_location' => $data['q4'],
                'living_state' => $data['q5'],
                'qus1' => $data['q6'],
                'qus2' => $data['q7'],
                'qus3' => $data['q8'],
                'qus4' => $data['q9'],
                'qus5' => $data['q10'],
                'remark' => $data['remark'],
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }

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

        try {
            // Mail::to('dev.quadque@gmail.com')->cc('tousif@quadque.tech')->send(new RplMail($data, $filePath));
        } catch (\Throwable $e) {
            return response()->json([
                'message' => "Something went wrong!",
            ], 500);
        }

        if ($request->hasFile('files') && count($request->file('files')) > 0) {
            Storage::delete('public/rpl/' . $fileName);
        }

        return response()->json(['success' => 'Successfully submitted your request'], 200);
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
