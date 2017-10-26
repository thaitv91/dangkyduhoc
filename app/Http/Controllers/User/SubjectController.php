<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\SubjectCareer;
use App, Auth;
use Illuminate\Http\Response;
use Cookie;
use App\Models\UserComparison;
use App\Models\Course;

class SubjectController extends Controller
{
	public function viewDetail( $slug, Request $request ){
		$locale = App::getLocale();
		$subject = Subject::where( 'slug' , $slug )->first();
		$subject_career = SubjectCareer::where('subject_id', $subject['id'])->get();
        $courses = Course::where('subject_slug', '=', $slug)
            ->groupBy('university_id')
            ->get();

		if ($locale == 'en') {
			$subject['name']= $subject->name_en;
			$subject['description'] = $subject->description_en;
		} else {
			$subject['name'] = $subject->name;
			$subject['description'] = $subject->description;
		}
		$this->viewData = array(
		    'title' => $subject['name'],
			'subject' 			=> $subject,
			'locale'			=> $locale,
			'subject_career' 	=> $subject_career,
			//'courses'			=> $subject->courses()->paginate(10),
			'courses'			=> $courses,
			'course_id'			=> json_encode($this->getCourseId()), // Get courses from cookie
		);

        if (isset($_GET['debug'])) {
            dd($courses);
        }
		return view( 'user.subjects' , $this->viewData );
	}

	public function setCookie(Request $request) {
		$course_id = $this->getCourseId();
		$cookie;
		$index = -1;
		if ($course_id) {
			$index = array_search($request->id, $course_id);
		}
		if ($index >= 0 && $index !== false) { // Remove course
			$cookie = new Response('0');
			if (Auth::check()) {
				UserComparison::where('user_id', Auth::user()->id)->where('course_id', $course_id[$index])->delete();
			}
			unset($course_id[$index]);
			$course_id = array_values($course_id); //Reset key of array
		} else { //Insert course
			$cookie = new Response('1');
			if (Auth::check()) {
				UserComparison::create(['user_id' => Auth::user()->id, 'course_id' => $request->id]);
			}
			array_push($course_id, $request->id);
		}
      	$cookie->withCookie(cookie()->forever('compare_course_id', json_encode($course_id)));
		return $cookie;
	}

	public function getCourseId() {
		$course_id = (array)json_decode(Cookie::get('compare_course_id'));
		
		if (Auth::check()) {
			$user = Auth::user();
			$course_id_db = $user->courseComparison()->get(['course_id']);
			$temp = array();
			foreach ($course_id_db as $key => $value) {
				array_push($temp, $value->course_id);
			}
			$course_id = $temp;
		}

		return $course_id;
	}

}
