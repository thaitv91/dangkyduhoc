<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie, Auth;
use App\Models\Course;
use App\Models\Country;
use App\Models\University;

class CourseController extends Controller
{
    private $subject; //SubjectController

    public function __construct() {
        $this->subject = new SubjectController;
    }

    public function compare() {
    	// $course_ids = new SubjectController;
    	$course_ids = $this->subject->getCourseId();
    	$cookie = Cookie::queue(Cookie::forever('compare_course_id', json_encode($course_ids)));
    	$courses = Course::whereIn('id', $course_ids)->get();
    	return view('user.compare', compact(['courses']))->withCookie($cookie);
    }

    public function apply() {
    	$countries = Country::get(['id', 'name', 'slug']);
        $course_id = $this->getApplyCourseId();
        $courses = Course::whereIn('id', $course_id)->get();
    	return view('user.apply', compact(['countries', 'courses']));
    }

    public function getUniversity(Request $request) {
    	$data = University::where('country_slug', $request->country_slug)->get(['id', 'name', 'slug']);
    	return $data;
    }

    public function getCourse(Request $request) {
        $data = Course::where('university_id', $request->university_id)
                ->whereNotIn('id', $this->getApplyCourseId())
                ->get(['id', 'name', 'slug', 'classification']);

        foreach ($data as $key => $value) {
            $value->duration = $value->information()->first()->duration;
        }

        return $data;
    }

    public function addCourse(Request $request) {
    	$data = $request->all();
    	return view('includes.user.apply_course', compact(['data']));
    }

    public function getApplyCourseId() {
    	$course_id = $this->subject->getApplyCourseId();

		return $course_id;
    }
}
