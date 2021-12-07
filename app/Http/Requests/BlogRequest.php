<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogRequest extends FormRequest
{
    protected function saveThumbnail()
    {
        //Get the file name without extension
        $file = $this->thumbnail;
        $thumbnailTitle = $this->thumbnail_title ? Str::slug($this->thumbnail_title) : Str::slug($this->title);
        $ext = $this->getClientOriginalExtension($file);
        $thumbnail = "{$thumbnailTitle}.{$ext}";

        if (!Storage::exists("public/blogs/thumbnails")) {
            Storage::makeDirectory("public/blogs/thumbnails");
        }

        Image::make($file)
            ->fit(1000)
            ->save(storage_path('app/public/blogs/thumbnails/' . $thumbnail));

        return $thumbnail;
    }


    protected function saveImage()
    {
        $file = $this->featured_image;
        $imageTitle = $this->featured_image_title ? Str::slug($this->featured_image_title) : Str::slug($this->title);
        $ext = $this->getClientOriginalExtension($file);
        $image = "{$imageTitle}.{$ext}";

        //check if directory exist or not
        if (!Storage::exists("public/blogs/images")) {
            Storage::makeDirectory("public/blogs/images");
        }

        Image::make($file)
            ->fit(1000)
            ->save(storage_path('app/public/blogs/' . $image));

        return $image;
    }

    private function getClientOriginalExtension($file)
    {
        $encodedImgString = explode(',', $file, 2)[1];
        $decodedImgString = base64_decode($encodedImgString);
        $info = getimagesizefromstring($decodedImgString);

        $ext = image_type_to_extension($info[2]);

        return $ext;
    }
}
