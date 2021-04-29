<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'category_id'   => 'required',
            'blog_title'    => 'required|string',
            'details'       => 'required',
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg|dimensions:min_width=780,min_height=1000',
            'img' => 'required|image|mimes:jpg,png,jpeg|dimensions:min_width=1920,min_height=1080',
            'meta_des'      => 'max:255'
        ];
    }
}
