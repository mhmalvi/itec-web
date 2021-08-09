<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BlogCategory;

class Blog extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];


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


    public function getBlogCategoriesIdAttribute($value)
    {
        if (is_null($value)) {
            return 'Uncategorized';
        }

        return $value;
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



    /**
     * 
     */
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_categories_id');
    }
}
