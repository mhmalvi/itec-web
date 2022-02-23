<?php

namespace App\Http\Requests;

use App\Models\CourseIndustry;

class IndustryDeleteRequest extends CourseIndustryRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }

    public function delete(CourseIndustry $industry)
    {
        $this->deleteThumbnail($industry);
        $industry->delete();
    }
}
