<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseIndustry;

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
}
