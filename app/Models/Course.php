<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseIndustry;
use App\Models\Qualification;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'action_user',
        'course_categories_id',
        'course_industries_id',
        'course_code',
        'course_name',
        'course_desc',
        'thumbnail',
        'checklist',
        'isPublished'
    ];


    /**
     *
     */
    public function courseIndustry()
    {
        return $this->belongsTo(CourseIndustry::class, 'course_industries_id');
    }


    /**
     *
     */
    public function qualifications()
    {
        return $this->belongsTo(Qualification::class);
    }

    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'course_categories_id');
    }
}
