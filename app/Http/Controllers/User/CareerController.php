<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App;
use App\Models\SubjectCareer;
use App\Models\Course;
use Auth;
use Cookie, Session;

class CareerController extends Controller
{
    public function viewDetail( $slug ){
    	$locale = App::getLocale();
     	$careers = Career::where( 'slug' , $slug )->first();

        $subject_career = SubjectCareer::where('career_id', '=', $careers->id)->get();

        $sblist = [];
        foreach ($subject_career as $sbc){
            $subject = App\Models\Subject::where('id', '=', $sbc->subject_id)->first();
            $sblist[] = $subject->slug;
        }

        $courses = Course::whereIn('subject_slug', $sblist)
            ->groupBy('university_id')
            ->get();

        if ($locale == 'en') {
            $careers['name']= $careers->name_en;
            $careers['description'] = $careers->description_en;
        } else {
            $careers['name'] = $careers->name;
            $careers['description'] = $careers->description;
        }

      	$this->viewData = array(
      	    'title' => $careers['name'],
            'careers' => $careers,
            'locale' => $locale,
            'courses' => $courses,
            'sblist' => $sblist,
            'course_id'			=> json_encode($this->getCourseId()), // Get courses from cookie
            'apply_course_id'	=> json_encode($this->getApplyCourseId()),
      	); 
      	return view( 'user.careers' , $this->viewData );
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
