<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Services\FeaturedCoursesProvider;
use Cviebrock\EloquentSluggable\Sluggable;

class CourseIndustry extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['action_user', 'title', 'slug'];



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


    /**
     *
     */
    public function courses()
    {
        return $this->hasMany(Course::class, 'course_industries_id');
    }

    public function getFeaturedCourses()
    {
        $course_provider = new FeaturedCoursesProvider();
        return $course_provider->getByIndustry($this);
    }
}
