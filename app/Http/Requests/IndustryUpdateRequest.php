<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use App\Models\CourseIndustry;

class IndustryUpdateRequest extends CourseIndustryRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:course_industries,title,' . $this->id,
        ];
    }

    public function update(CourseIndustry $industry)
    {
        $industry->title = $this->title;
        $industry->slug = Str::slug($this->title);
        $industry->description = $this->description;
        $industry->is_published = $this->is_published;

        if ($this->filled('thumbnail')) {
            $this->deleteThumbnail($industry);

            $industry->thumbnail = $this->saveThumbnail($industry->slug);
        }

        $industry->save();
    }
}
