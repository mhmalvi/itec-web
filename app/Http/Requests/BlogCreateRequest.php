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
            'thumbnail'     => 'required|image|mimes:jpg,png,jpeg|dimensions:min_width=780,min_height=1000',
            'img'           => 'required|image|mimes:jpg,png,jpeg|dimensions:min_width=1920,min_height=1080',
        ];
    }


    public function save()
    {
        $category = BlogCategory::where('title', $this->category_id)->first();

        $slug = Str::slug($this->blog_title);

        $blog = Blog::create([
            'action_user' => Auth::id(),
            'blog_categories_id' => $category->id,
            'blog_title' => $this->blog_title,
            'blog_slug' => $this->has('urlSlug') ? $this->urlSlug : $slug,
            'blog_des' => $this->details,
            'meta_des' => $this->meta_des,
            'meta_tags' => $this->meta_tags,
            'meta_keys' => $this->meta_keys,
            'image' => $this->hasFile('img') ? $this->saveImage() : "",
            'thumbnail' => $this->hasFile('thumbnail') ? $this->saveThumbnail() : "",
            'image_alt' => $this->img_alt ? $this->img_alt : $this->blog_title,
            'thumbnail_alt' => $this->thumb_alt ? $this->thumb_alt : $this->blog_title,
            'isPublished' => ($this->publish === 'on') ? 1 : 0
        ]);

        return $blog;
    }
}
