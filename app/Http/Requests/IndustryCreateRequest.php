<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use App\Models\CourseIndustry;

class IndustryCreateRequest extends CourseIndustryRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:course_industries'
        ];
    }

    public function save()
    {
        $industry = new CourseIndustry();

        $industry->title = $this->title;
        $industry->slug = Str::slug($this->title);
        $industry->description = $this->description;
        $industry->thumbnail = $this->saveThumbnail($industry->slug);
        $industry->is_published = $this->is_published;

        $industry->save();
    }
}
