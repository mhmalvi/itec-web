<?php

namespace App\Http\Requests;

use App\Models\CourseIndustry;
use App\Services\ImageHandler;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class CourseIndustryRequest extends FormRequest
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

    protected function saveThumbnail($name)
    {
        $image_handler = new ImageHandler();
        $image_handler->setImage($this->thumbnail)
            ->setName($name)
            ->setDimension(780, 1000)
            ->setPath("industry");

        return $image_handler->storeFromImageData();
    }

    protected function deleteThumbnail(CourseIndustry $industry)
    {
        Storage::delete('public/industry/' . $industry->thumbnail);
    }
}
