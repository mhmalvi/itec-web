<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'blog_slug';
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

    /**
     * Thumbnail
     */
    public function  getThumbnailAttribute($value)
    {
        if (is_null($value)) {
            return "https://dummyimage.com/780x1000";
        } else {
            return asset(Storage::url("blogs/thumbnails/{$value}"));
        }
    }

    /**
     * Featured
     */
    public function  getImageAttribute($value)
    {
        if (is_null($value)) {
            return "https://dummyimage.com/1920x1285";
        } else {
            return asset(Storage::url("blogs/images/{$value}"));
        }
    }
}
