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
            $data = array(
                'title' => $course->name,
                'course' => $course,
                'university' => $university,
                'country' => $country,
                'ranking' => $ranking,
                'cost' => $cost,
                'requirement' => $requirement,
                'information' => $information
            );
            if (isset($_GET['debug'])) {
                dd($information);
            }
            return view('user.course-detail', $data);
        } else {
            abort(404);
        }
    }
}
