<?php

namespace App\Services\CourseProviders;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

class BusinessLeadershipCoursesProvider implements CoursesProviderInterface
{
    public static function getCourses(): Collection
    {
        $codes = [
            'FNS50217', 'FNS60217', 'BSB52415', 'BSB61315',
            'BSB51915'
        ];
        return Course::whereIn('course_code', $codes)->get();
    }
}
