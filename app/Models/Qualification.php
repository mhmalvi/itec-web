<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Course;

class Qualification extends Model
{
    use HasFactory;


    /**
     * 
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
