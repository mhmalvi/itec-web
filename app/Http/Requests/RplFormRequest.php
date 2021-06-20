<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RplFormRequest extends FormRequest
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
            'contact' => 'required|string|max:50',
            'location' => 'required',
            'qualification' => 'required',
            'relevant' => 'required',
            'work_location' => 'required',
        ];
    }
}
