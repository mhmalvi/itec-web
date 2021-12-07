<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'action_user' => $this->user,
            'category' => $this->category,
            'title' => $this->blog_title,
            'slug' => $this->blog_slug,
            'description' => $this->blog_des,
            'meta_description' => $this->meta_des,
            'meta_tags' => $this->meta_tags,
            'meta_keys' => $this->meta_keys,
            'thumbnail' => ($this->thumbnail) ? asset('storage/blogs/thumbnails/' . $this->thumbnail) : '',
            'image' => ($this->image) ? asset('storage/blogs/images/' . $this->image) : '',
            'thumbnail_alt' => $this->thumbnail_alt,
            'image_alt' => $this->image_alt,
            'isPublished' => $this->isPublished,
        ];
    }
}
