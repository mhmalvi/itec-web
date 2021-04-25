<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'action_user',
        'blog_categories_id',
        'blog_title',
        'blog_slug',
        'blog_des',
        'thumbnail',
        'isPublished'
    ];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'blog_slug' => [
                'source' => 'blog_title'
            ]
        ];
    }
}
