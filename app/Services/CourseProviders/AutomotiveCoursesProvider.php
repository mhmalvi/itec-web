<?php

namespace App\Services\CourseProviders;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

class AutomotiveCoursesProvider implements CoursesProviderInterface
{
    public static function getCourses(): Collection
    {
        $course_codes = [
            'AUR30616', 'AUR40816',
        ];

        return Course::whereIn("course_code", $course_codes)->get();
    }
}
