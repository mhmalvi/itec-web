<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use App\Models\BlogCategory;

class BlogUpdateRequest extends BlogRequest
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
            'meta_des'      => 'max:255',
            'thumbnail'     => 'image|mimes:jpg,png,jpeg|dimensions:min_width=780,min_height=1000',
            'img'           => 'image|mimes:jpg,png,jpeg|dimensions:min_width=1920,min_height=1080'
        ];
    }


    public function update($blog)
    {
        $slug = Str::slug($this->blog_title);
        $category = BlogCategory::where('title', $this->category_id)->first();

        $blog->blog_categories_id = $category->id;
        $blog->blog_title = $this->blog_title;
        $blog->blog_slug = $this->has('urlSlug') ? $this->urlSlug : $slug;
        $blog->blog_des = $this->details;
        $blog->meta_des = $this->meta_des;
        $blog->meta_tags = $this->meta_tags;
        $blog->meta_keys = $this->meta_keys;
        $blog->isPublished = ($this->publish === 'on') ? 1 : 0;
        $blog->image_alt = $this->img_alt;
        $blog->thumbnail_alt = $this->thumb_alt;

        if ($this->hasFile('thumbnail')) {
            $blog->thumbnail = $this->saveThumbnail();
        }

        if ($this->hasFile('img')) {
            $blog->image = $this->saveImage();
        }

        $blog->save();
    }
}
