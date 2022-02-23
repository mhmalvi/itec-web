<?php

namespace App\Services\CourseProviders;

use Illuminate\Database\Eloquent\Collection;

interface CoursesProviderInterface
{
    public static function getCourses(): Collection;
}
