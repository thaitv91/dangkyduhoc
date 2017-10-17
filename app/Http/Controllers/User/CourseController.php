<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cookie;
use App\Models\Course;
use Auth;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    public function compare() {
    	$course_ids = new SubjectController;
    	$course_ids = $course_ids->getCourseId();
    	$cookie = Cookie::queue(Cookie::forever('compare_course_id', json_encode($course_ids)));
    	$courses = Course::whereIn('id', $course_ids)->get();
    	return view('user.compare', compact(['courses']))->withCookie($cookie);
    }
}
