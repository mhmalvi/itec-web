<?php

namespace App\Services\CourseProviders;

use App\Models\CourseIndustry;
use Illuminate\Database\Eloquent\Collection;

class HospitalityIndustryCoursesProvider implements CoursesProviderInterface
{
    public static function getCourses(): Collection
    {
        $industry = CourseIndustry::where('slug', 'like', '%hospitality%')->first();
        return $industry->courses()->take(5)->get();
    }
}
