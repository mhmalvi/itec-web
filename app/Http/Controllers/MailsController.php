<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Http\Requests\JoinAsRtoCreateRequest;
use App\Http\Requests\RplFormRequest;
use App\Jobs\SendEmailJob;
use App\Mail\ApplyMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;
use Illuminate\Http\Request;
use App\Http\Requests\SubscribersRequest;

class MailsController extends Controller
{
    private $error = "Something went wrong! Please try again or contact at 'info@itecounsel.com'";

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
     * RPL Eligibility Check
     */
    public function rplRequest(RplFormRequest $request)
    {
        try {
            $request->save();
            return response()->json(['success' => 'Your request has been submitted successfully!'], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'errors' => $this->error,
            ], 500);
        }
    }

    /**
     * Subscribers
     */
    public function subscribe(SubscribersRequest $request)
    {
        try {
            $request->save();
            return response()->json(['success' => 'Thanks for your subscription!'], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'errors' => [
                    'message' => $th->getMessage()
                ]
            ], 500);
        }
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

    /**
     * Join As Rto Partner
     */
    public function rtoPartner(JoinAsRtoCreateRequest $request)
    {
        try {
            $request->send();

            return response()->json([
                'message' => "Successfully sent the email request!",
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong! Please try again later.",
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
