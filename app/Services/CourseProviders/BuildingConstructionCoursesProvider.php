<?php

namespace App\Services\CourseProviders;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

class BuildingConstructionCoursesProvider implements CoursesProviderInterface
{
    public static function getCourses(): Collection
    {
        $codes = [
            'CPC30211', 'CPC30611', 'CPC30111', 'CPC31912', 'CPC31411',
            'CPC32413', 'CPC40912', 'MSF31113', 'MEM30305',
        ];
        return Course::whereIn('course_code', $codes)->get();
    }
}
