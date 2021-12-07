<?php

namespace App\Http\Requests;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogCreateRequest extends BlogRequest
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
            'title' => 'required|string',
        ];
    }

    public function save()
    {
        $slug = Str::slug($this->title);

        $blog = Blog::create([
            'action_user' => Auth::id(),
            'blog_categories_id' => $this->category_id,
            'blog_title' => $this->title,
            'blog_slug' => $this->has('slug') ? $this->slug : $slug,
            'blog_des' => $this->description,
            'meta_des' => $this->meta_description,
            'meta_tags' => $this->meta_tags,
            'meta_keys' => $this->meta_keys,
            'image' => $this->filled('featured_image') ? $this->saveImage() : "",
            'thumbnail' => $this->filled('thumbnail') ? $this->saveThumbnail() : "",
            'image_alt' => $this->featured_image_alt ? $this->featured_image_alt : $this->title,
            'thumbnail_alt' => $this->thumbnail_alt ? $this->thumbnail_alt : $this->title,
            'isPublished' => $this->isPublished,
        ]);

        return $blog;
    }
}
