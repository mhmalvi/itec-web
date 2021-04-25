<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'isPublished'
    ];
}
