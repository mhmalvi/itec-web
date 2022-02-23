<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use Cviebrock\EloquentSluggable\Sluggable;

class CourseIndustry extends Model
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
            'slug' => [
                'source' => 'industry_name'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'action_user');
    }

    /**
     *
     */
    public function courses()
    {
        return $this->hasMany(Course::class, 'course_industries_id');
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? asset('storage/industry/' . $this->thumbnail) : null;
    }
}
