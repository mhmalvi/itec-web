<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoinAsRtoCreateRequest extends FormRequest
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
            'first_name' => "required|string|max:125|alpha",
            'last_name' => "required|string|max:125|alpha",
            'phone' => "required|string|max:125|alpha_num",
            'email' => "required|email|max:125",
            'rto_name' => "required|max:125|alpha_num",
        ];
    }
}
