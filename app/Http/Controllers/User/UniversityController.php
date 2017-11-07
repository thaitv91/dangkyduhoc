<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityStatistic;
use App\Models\UniversityRanking;
use App\Models\UniversityMetas;
use App\Models\ApplyCourse;
use App\Models\Country;
use App\Models\Map;
use App\Models\MapLocation;
use App;
use App\Models\Course;
use Session;
use Auth;
use Cookie;

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

        if (isset($_GET['debug'])) {
            dd($subjects_slug);
        }

        if ($subjects_slug->count() > 0) {
            $subject_first = App\Models\Subject::where('slug', '=', $subjects_slug[0]->subject_slug)->first();
            $courses_of_first_subject = Course::where('university_id', '=', $university->id)
                ->where('subject_slug', '=', $subjects_slug[0]->subject_slug)
                ->get();
        } else {
            $subject_first = null;
            $courses_of_first_subject = null;
        }

        // scholarship
        $courses_slug = Course::where('university_id', '=', $university->id)
            ->select('slug')
            ->get();

        $course_slug_arr = [];
        foreach ($courses_slug as $course) {
            $course_slug_arr[] = $course->slug;
        }

        $scholarships = App\Models\Scholarships::whereIn('course_slug', $course_slug_arr)->get();
        if (! $meta) {
            $meta = new UniversityMetas();
            $meta->university_id = $university->id;
            $meta->save();
        }
        if ($locale == 'en') {
            $university['name']= $university->name_en;
            $meta['about'] = $meta ? $meta->about : '';
            $meta['campus'] = $meta ? $meta->campus : '';
            $subject_first_name = $subject_first['name_en'];
        } else {
            $university['name'] = $university->name;
            $meta['about'] = $meta ? $meta->about : '';
            $meta['campus'] = $meta ? $meta->campus : '';
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
            'scholarships' => $scholarships,
            'apply_course_id'	=> json_encode($this->getApplyCourseId()),
        );

        return view( 'user.universities' , $this->viewData );
    }

    public function setCookieFrequentlyVisitedUniversityIds(Request $request) {

        $university_slug = $request->university_slug;
        $university_ids = (array)json_decode(Cookie::get('frequent_visited_university_ids', json_encode(array())));
        $university_db = University::where('slug', $university_slug)->first();
        $cookie = new Response;
        if (count($university_db) > 0) {
            $university_id = $university_db->id;
            //id belongs to university_ids and index of id != 0 => swap index
            $index = array_search($university_id, $university_ids);

            if($index == false){
                if ($index !== 0) {
                    $temp = array();
                    array_push($temp, $university_id);
                    for ($i=0; $i < 2; $i++) {
                        if (isset($university_ids[$i])) {
                            array_push($temp, $university_ids[$i]);
                        }
                    }
                    $university_ids = $temp;
                }
            } else {
                $tmp = $university_ids[0];
                $university_ids[0] = $university_ids[$index];
                $university_ids[$index] = $tmp;

                $tmp = $university_ids[1];
                $university_ids[1] = $university_ids[$index];
                $university_ids[$index] = $tmp;
            }
        }
        $cookie->withCookie(cookie()->forever('frequent_visited_university_ids', json_encode($university_ids)));
        return $cookie;
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
