<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class CourseIndustry extends Model
{
    use HasFactory;

    protected $fillable = ['title'];



    /**
     * 
     */
    public function courses()
    {
        return $this->hasMany(Course::class, 'course_industries_id');
    }
}
