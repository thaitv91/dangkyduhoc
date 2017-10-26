<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityStatistic;
use App\Models\UniversityRanking;
use App\Models\UniversityMetas;
use App\Models\Country;
use App\Models\Map;
use App\Models\MapLocation;
use App;
use App\Models\Course;
class UniversityController extends Controller
{
    public function viewDetail( $slug ){
      
        $university = University::where( 'slug' , $slug )->first();
        $statistic = UniversityStatistic::where( 'university_id', $university->id )->first();
        $meta = UniversityMetas::where( 'university_id', $university->id )->first();
        $ranking = UniversityRanking::where( 'university_id', $university->id )->get();
        $locale = App::getLocale();

        $map_university = Map::where('id', $university->map_id)->first();

        $subjects_slug = Course::where('university_id', '=', $university->id)
            ->select('subject_slug')
            ->groupBy('subject_slug')
            ->get();

        $subject_first = App\Models\Subject::where('slug', '=', $subjects_slug[0]->subject_slug)->first();

        $courses_of_first_subject = Course::where('university_id', '=', $university->id)
            ->where('subject_slug', '=', $subjects_slug[0]->subject_slug)
            ->get();

        // scholarship
        $courses_slug = Course::where('university_id', '=', $university->id)
            ->select('slug')
            ->get();

        $course_slug_arr = [];
        foreach ($courses_slug as $course) {
            $course_slug_arr[] = $course->slug;
        }

        $scholarships = App\Models\Scholarships::whereIn('course_slug', $course_slug_arr)->get();

        if (isset($_GET['debug'])) {
            dd($scholarships);
        }

        if ($locale == 'en') {
            $university['name']= $university->name_en;
            $meta['about'] = $meta->about_en;
            $meta['campus'] = $meta->campus_en;
            $subject_first_name = $subject_first['name_en'];
        } else {
            $university['name'] = $university->name;
            $meta['about'] = $meta->about;
            $meta['campus'] = $meta->campus;
            $subject_first_name = $subject_first['name'];
        }

        $slider = $university->slider()->first();
        $images = array();

        if (count($slider) != 0)
            $images = $slider->images;

        $this->viewData = array(
            'title' => $university['name'],
            'university' => $university,
            'statistic' => $statistic,
            'meta'  => $meta,
            'ranking' => $ranking,
            'locale'  => $locale,
            'map_university' => $map_university,
            'images'  =>  $images,
            'subjects_slug' => $subjects_slug,
            'courses' => $courses_of_first_subject,
            'subject_first_name' => $subject_first_name,
            'scholarships' => $scholarships
        );

        return view( 'user.universities' , $this->viewData );
    }
}
