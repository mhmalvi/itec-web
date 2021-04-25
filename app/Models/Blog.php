<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Blog extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'action_user',
        'blog_categories_id',
        'blog_title',
        'blog_slug',
        'blog_des',
        'meta_des',
        'thumbnail',
        'isPublished'
    ];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'blog_slug' => [
                'source' => 'blog_title'
            ]
        ];
    }



    /**
     * @return Date
     */
    public function getCreatedAtAttribute($value)
    {
        return date("M d, Y", strtotime($value));
    }



    /**
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'action_user');
    }
}
