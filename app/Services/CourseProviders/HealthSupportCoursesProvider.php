<?php

namespace App\Services\CourseProviders;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

class HealthSupportCoursesProvider implements CoursesProviderInterface
{
    public static function getCourses(): Collection
    {
        $course_codes = [
            'CHC33015', 'CHC43015', 'CHC43115', 'CHC52015', 'CHC30113',
            'CHC50113', 'CHC30213', 'CHC40213',
        ];
        return Course::whereIn('course_code', $course_codes)->get();
    }
}
