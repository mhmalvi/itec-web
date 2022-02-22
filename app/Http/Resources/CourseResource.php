<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'id' => $this->id,
            'action_user' => $this->action_user,
            'industry' => $this->courseIndustry,
            'category' => $this->category,
            'title' => $this->course_name,
            'code' => $this->course_code,
            'description' => $this->course_desc,
            'thumbnail' => $this->thumbnail,
            'checklist' => $this->checklist,
            'isPublished' => $this->isPublished,
        ];
    }
}
