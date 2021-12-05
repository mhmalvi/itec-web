<?php

namespace App\Http\Requests;

use App\Models\Blog;
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
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => 'required',
        ];
    }

    public function update($blog)
    {
        $slug = Str::slug($this->title);

        $category = BlogCategory::findOrFail($this->category_id);

        $blog->blog_categories_id = $category->id;
        $blog->blog_title = $this->title;
        $blog->blog_slug = $this->has('urlSlug') ? $this->slug : $slug;
        $blog->blog_des = $this->description;
        $blog->meta_des = $this->meta_description;
        $blog->meta_tags = $this->meta_tags;
        $blog->meta_keys = $this->meta_keys;
        $blog->isPublished = $this->isPublished;
        $blog->image_alt = $this->featured_image_alt;
        $blog->thumbnail_alt = $this->thumbnail_alt;

        if ($this->filled('thumbnail') && substr($this->thumbnail, 0, 4) != 'http') {
            $blog->thumbnail = $this->saveThumbnail();
        } else {
            $this->destroyThumbnail($blog);
            $blog->thumbnail = '';
        }

        if ($this->filled('featured_image')) {
            // if the image data starts with http, it means
            // that the user haven't updated the image, so
            // we can ignore it
            if (substr($this->featured_image, 0, 4) != 'http') {
                $blog->image = $this->saveImage();
            }
        } else {
            $this->destroyImage($blog);
            $blog->image = '';
        }

        $blog->save();
    }
}
