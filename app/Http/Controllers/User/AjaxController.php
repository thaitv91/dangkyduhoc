<?php

namespace App\Http\Controllers\User;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class AjaxController extends Controller
{
    public function getCourseDetail($slug) {
        $course = Course::where('slug', '=', $slug)->first();

        if ($course) {
            $university = $course->university()->first();
            $country = Country::where('slug', '=', $university->country_slug)->first();
            $ranking = $course->ranking()->get();
            $cost = $course->cost()->first();
            $requirement = $course->requirement()->first();
            $information = $course->information()->first();

            $similar = explode(', ', $course->name)[0];
            $similar_course = Course::leftJoin('university', 'course.university_id', 'university.id')
                ->leftJoin('course_costs', 'course.id', 'course_costs.course_id')
                ->leftJoin('course_information', 'course.id', 'course_information.course_id')
                ->leftJoin('course_entry_requirements', 'course.id', 'course_entry_requirements.course_id')
                ->select('course.id as course_id','course.name as course_name', 'course.slug as course_slug', 'university.*', 'course_costs.*', 'course_information.duration', 'course_entry_requirements.level')
                ->where('course.name', 'LIKE', $similar .'%')
                ->where('course.id', '<>' , $course->id)
                ->where('university.country_slug', '=', $university->country_slug)
                ->limit(5)
                ->get();

            $similar_course_id = array();
            foreach ($similar_course as $course) {
                $similar_course_id[] = $course->course_id;
            }
            $explode = explode(' ', $similar);
            $search = '%';
            foreach ($explode as $ex) {
                if ($ex != '&' && $ex != 'and') {
                    $search .= $ex . '%';
                }
            }
            $also_apply = Course::leftJoin('university', 'course.university_id', 'university.id')
                ->leftJoin('course_costs', 'course.id', 'course_costs.course_id')
                ->leftJoin('course_information', 'course.id', 'course_information.course_id')
                ->leftJoin('course_entry_requirements', 'course.id', 'course_entry_requirements.course_id')
                ->select('course.id as course_id','course.name as course_name', 'course.slug as course_slug', 'university.*', 'course_costs.*', 'course_information.duration', 'course_entry_requirements.level')
                ->where('course.name', 'LIKE', $search)
                ->whereNotIn('course.id', $similar_course_id)
                ->where('university.country_slug', '=', $university->country_slug)
                ->limit(5)
                ->get();

            $data = array(
                'title' => $course->name,
                'course' => $course,
                'university' => $university,
                'country' => $country,
                'ranking' => $ranking,
                'cost' => $cost,
                'requirement' => $requirement,
                'information' => $information,
                'similar_course' => $similar_course,
                'also_apply' => $also_apply
            );
            if (isset($_GET['debug'])) {
                dd( $also_apply );
            }
            return view('user.course-detail', $data);
        } else {
            abort(404);
        }
    }
}
