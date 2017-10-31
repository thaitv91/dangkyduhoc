<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie, Auth, DB;
use App\Models\Course;
use App\Models\Country;
use App\Models\University;
use Carbon\Carbon;

class CourseController extends Controller
{
    private $subject; //SubjectController

    public function __construct() {
        $this->subject = new SubjectController;
    }

    public function compare() {
    	$course_ids = $this->subject->getCourseId();
    	$cookie = Cookie::queue(Cookie::forever('compare_course_id', json_encode($course_ids)));
    	$courses = Course::whereIn('id', $course_ids)->get();
        $apply_course_id = $this->getApplyCourseId();
    	return view('user.compare', compact(['courses', 'apply_course_id']))->withCookie($cookie);
    }

    public function apply() {
    	$countries = Country::get(['id', 'name', 'slug']);
        $course_id = $this->getApplyCourseId();
        $courses = Course::whereIn('id', $course_id)->get();
        $user = Auth::user();
        if ($user) {
            $course_user = DB::table('apply_courses')->where('user_id', $user->id)->get();
            foreach ($courses as $key => $course) {
                foreach ($course_user as $value) {
                    if ($course->id == $value->course_id) {
                        $course->receive_status = $value->receive_status;
                        $course->received = $value->received?Carbon::parse($value->received)->format('d/m/Y'):"";
                        $course->review_status = $value->review_status;
                        $course->reviewd = isset($value->reviewed)?Carbon::parse($value->reviewed)->format('d/m/Y'):"";
                        $course->submit_status = $value->submit_status;
                        $course->submitted = isset($value->submitted)?Carbon::parse($value->submitted)->format('d/m/Y'):"";
                        $course->outcome_status = $value->outcome_status;
                        $course->outcome = isset($value->outcome)?Carbon::parse($value->outcome)->format('d/m/Y'):"";
                        $course->note = $value->note;
                        break;
                    }
                }
            }
        }
        
    	return view('user.apply', compact(['countries', 'courses', 'user']));
    }

    public function getUniversity(Request $request) {
    	$data = University::where('country_slug', $request->country_slug)->get(['id', 'name', 'slug']);
    	return $data;
    }

    //Get all course compare
    public function getCourse(Request $request) {
        $data = Course::where('university_id', $request->university_id)
                ->whereNotIn('id', $this->getApplyCourseId())
                ->get(['id', 'name', 'slug', 'classification']);

        foreach ($data as $key => $value) {
            $value->duration = $value->information()->first()->duration;
        }

        return $data;
    }

    //Add new course into view apply
    public function addCourse(Request $request) {
    	$data = $request->all();
    	return view('includes.user.apply_course', compact(['data']));
    }

    //Get all coure apply
    public function getApplyCourseId() {
    	$course_id = $this->subject->getApplyCourseId();

		return $course_id;
    }
}
