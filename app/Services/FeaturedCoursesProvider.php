<?php

namespace App\Services;

use App\Services\CourseProviders\AutomotiveCoursesProvider;
use App\Services\CourseProviders\BuildingConstructionCoursesProvider;
use App\Services\CourseProviders\BusinessLeadershipCoursesProvider;
use App\Services\CourseProviders\HealthSupportCoursesProvider;
use App\Services\CourseProviders\HospitalityIndustryCoursesProvider;
use Illuminate\Database\Eloquent\Collection;

class FeaturedCoursesProvider
{
    public function getByIndustry($industry)
    {
        return $this->get_courses($industry);
    }

    private function get_courses($industry)
    {
        switch ($industry->slug) {
            case 'construction':
                return BuildingConstructionCoursesProvider::getCourses();
            case 'business-leadership':
                return BusinessLeadershipCoursesProvider::getCourses();
            case 'hospitality-industry':
                return HospitalityIndustryCoursesProvider::getCourses();
            case 'health-support':
                return HealthSupportCoursesProvider::getCourses();
            case 'automotive':
                return AutomotiveCoursesProvider::getCourses();
            case 'others':
                return $industry->courses()->take(5)->get();
            default:
                return Collection::make([]);
                break;
        }
    }
}
