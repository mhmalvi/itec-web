<?php

namespace App\Http\Requests;

use App\Mail\SubscribeMail;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Mail;

class SubscribersRequest extends MailsRequest
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
            'email' => 'required|email|max:255|unique:subscribes',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => "Your have already subscribed with this email",
        ];
    }

    public function save()
    {
        Subscribe::create([
            'email' => $this->email
        ]);

        $this->sendMail();
    }

    private function sendMail()
    {
        Mail::to($this->receipent)->cc($this->cc)->send(new SubscribeMail([
            'email' => $this->email
        ]));
    }
}
