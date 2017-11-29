<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\SubjectCareer;
use App, Auth;
use Illuminate\Http\Response;
use Cookie, Session;
use App\Models\UserComparison;
use App\Models\ApplyCourse;
use App\Models\Course;

class SubjectController extends Controller
{
	public function viewDetail( $slug, Request $request ){
		$locale = App::getLocale();
		// dd(App::getLocale());
		$subject = Subject::where( 'slug' , $slug )->first();
		$subject_career = SubjectCareer::where('subject_id', $subject['id'])->get();
        $courses = Course::where('subject_slug', '=', $slug)
            ->groupBy('university_id')
            ->get();
		$course_count = Course::where('subject_slug', $slug)->count();
		$university_count = $courses->count();

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
			'apply_course_id'	=> json_encode($this->getApplyCourseId()),
			'course_count'		=> $course_count,
			'university_count'	=> $university_count,
		);

        if (isset($_GET['debug'])) {
            dd($courses);
        }
		return view( 'user.subjects' , $this->viewData );
	}

	public function setCookieFrequentlyVisitedSubjectIds(Request $request) {

		$subject_slug = $request->subject_slug;
		$subject_ids = (array)json_decode(Cookie::get('frequent_visited_subject_ids', json_encode(array())));
		$subject_db = Subject::where('slug', $subject_slug)->first();
		$cookie = new Response;
		if (count($subject_db) > 0) {
			$subject_id = $subject_db->id;
			//id belongs to subject_ids and index of id != 0 => swap index
			$index = array_search($subject_id, $subject_ids);

			if($index == false){
				if ($index !== 0) {
					$temp = array();
					array_push($temp, $subject_id);
					for ($i=0; $i < 2; $i++) {
						if (isset($subject_ids[$i])) {
							array_push($temp, $subject_ids[$i]);
						}
					}
					$subject_ids = $temp;
				}
			} else {
				$tmp = $subject_ids[0];
				$subject_ids[0] = $subject_ids[$index];
				$subject_ids[$index] = $tmp;

				$tmp = $subject_ids[1];
				$subject_ids[1] = $subject_ids[$index];
				$subject_ids[$index] = $tmp;
			}
		}
		$cookie->withCookie(cookie()->forever('frequent_visited_subject_ids', json_encode($subject_ids)));
		return $cookie;
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

	public function setCookieApplyCourse(Request $request) {
		$course_id = $this->getApplyCourseId();
		$cookie;
		$index = -1;
		if ($course_id) {
			$index = array_search($request->id, $course_id);
		}
		if ($index >= 0 && $index !== false) { // Remove course
			$cookie = new Response('0');
			if (Auth::check()) {
				ApplyCourse::where('user_id', Auth::user()->id)->where('course_id', $course_id[$index])->delete();
				return 0;
			}else {
				unset($course_id[$index]);
			}
			$course_id = array_values($course_id); //Reset key of array
		} else { //Insert course
			$cookie = new Response('1');
			if (Auth::check()) {
				ApplyCourse::create(['user_id' => Auth::user()->id, 'course_id' => $request->id]);
				return 1;
			} else {
				array_push($course_id, $request->id);
			}
		}

      	$cookie->withCookie(cookie()->forever('apply_course_id', json_encode($course_id)));
		return $cookie;
	}

	public function getApplyCourseId() {
		$course_id;
		
		if (!Session::get('is_not_first_login')) {// In the case first log-in or do not login
			$course_id = (array)json_decode(Cookie::get('apply_course_id'));
			if (Auth::check()) { // User first login use data from db and cookie
				$user = Auth::user();
				$course_id_db = $user->applyCourse()->get(['course_id']);
				$temp = array();
				foreach ($course_id_db as $key => $value) {
					array_push($temp, $value->course_id);
				}
				$course_id = array_values(array_unique(array_merge($course_id, $temp)));
				ApplyCourse::where('user_id', Auth::user()->id)->delete();
				foreach ($course_id as $key => $value) {
					ApplyCourse::create(['user_id' => Auth::user()->id, 'course_id' => $value]);
				}
				Session::put('is_not_first_login', true);
			} else {  //In the case user is guest, use data from cookie
				$course_id = (array)json_decode(Cookie::get('apply_course_id'));
			}
		} else { // Has been logged-in and use data from database
			$user = Auth::user();
			$course_id_db = $user->applyCourse()->get(['course_id']);
			$course_id = array();
			foreach ($course_id_db as $key => $value) {
				array_push($course_id, $value->course_id);
			}
		}

		return $course_id;
	}
}
