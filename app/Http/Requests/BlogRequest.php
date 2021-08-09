<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogRequest extends FormRequest
{
    protected function saveThumbnail()
    {
        //Get the file name without extension
        $file = $this->file('thumbnail');
        $thumbnailTitle = $this->thumb_title ? Str::slug($this->thumb_title) : $this->blog_title;
        $ext = $file->getClientOriginalExtension();
        $thumbnail = "{$thumbnailTitle}.{$ext}";

        if (!Storage::exists("public/blogs/thumbnails")) {
            Storage::makeDirectory("public/blogs/thumbnails");
        }
        Storage::putFileAs('public/blogs/thumbnails', $file, $thumbnail);

        return $thumbnail;
    }


    protected function saveImage()
    {
        $file = $this->file('img');
        $imageTitle = $this->img_title ? Str::slug($this->img_title) : $this->blog_title;
        $ext = $file->getClientOriginalExtension();
        $image = "{$imageTitle}.{$ext}";

        //check if directory exist or not
        if (!Storage::exists("public/blogs/images")) {
            Storage::makeDirectory("public/images");
        }

        Storage::putFileAs('public/blogs', $file, $image);
    }
}
