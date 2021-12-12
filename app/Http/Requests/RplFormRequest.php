<?php

namespace App\Http\Requests;

use App\Mail\RplMail;
use App\Models\RplEligibilityRequest;
use Illuminate\Support\Facades\Mail;

class RplFormRequest extends MailsRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'email' => 'required|email',
            'phone' => 'required|string|max:50',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'q1.required' => "This field is required",
            'q2.required' => "This field is required",
            'q3.required' => "This field is required",
            'q4.required' => "This field is required",
            'q5.required' => "This field is required",
            'q6.required' => "This field is required",
            'q7.required' => "This field is required",
            'q8.required' => "This field is required",
            'q9.required' => "This field is required",
            'q10.required' => "This field is required",
        ];
    }

    public function save()
    {
        $data = [
            'name' => $this['name'],
            'email' => $this['email'],
            'contact' => $this['phone'],
            'industry' => $this['q1'],
            'qualification' => $this['q2'],
            'work_experience' => $this['q3'],
            'work_location' => $this['q4'],
            'living_state' => $this['q5'],
            'qus1' => $this['q6'],
            'qus2' => $this['q7'],
            'qus3' => $this['q8'],
            'qus4' => $this['q9'],
            'qus5' => $this['q10'],
            'remark' => $this['remark'],
        ];

        RplEligibilityRequest::create($data);
        $this->sendMail($data);
    }

    private function sendMail($data)
    {
        Mail::to($this->receipent)->cc($this->cc)->send(new RplMail($data));
    }
}
