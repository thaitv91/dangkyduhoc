<?php

namespace App\Http\Controllers\User;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Response;

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
                'similar_coursce' => $similar_course,
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

    public function getSimilar(Request $request) {

        $data = $request->all();
        $slug = $data['slug'];
        $course = Course::where('slug', '=', $slug)->first();

        $similar = Course::where('university_id', '=', $course->university_id)
            ->where('subject_slug', '=', $course->subject_slug)
            ->where('id', '<>', $course->id)
            ->get();

        $html = '';
        foreach ($similar as $course) {
            $html .= $this->renderSimilar($course);
        }
        return $html;
    }

    public function renderSimilar($course) {
        $explode = explode(', ', $course->name);
        $similar = $course->cost;
        $course_info = \App\Models\CourseInformation::where('course_id', '=', $course->id)->first();
        $course_requi = \App\Models\CourseRequirement::where('course_id', '=', $course->id)->first();
        $cost_year = ($similar->day_drink_fees + $similar->day_food_fees + $similar->day_accommodation_fees + $similar->day_coffe_fees) * 600/1000 + $similar->year_tuition_fees;
        $html = '<div class="row item similar-item"><div class="uni-logo-col col-lg-1 col-md-1 col-sm-2 col-xs-3 col-no-pad-right"><div class="uni-logo"><img src="/img/B085_bathspa_logo.jpg" alt=""/></div></div><div class="col-lg-11 col-md-11 col-sm-10 col-xs-9"><div class="row"><div class="col-lg-4 col-md-4 col-sm-7 col-xs-12"><div class="uni-name">';
        $html .= '<a class="course_name" href="/course/'. $course->slug .'">'. $explode[0] . '</a><div class="classification">'. $explode[1] .'</div><div class="uni-name-sec"><a class="university_name" href="/university/'. $course->university->slug .'">'. $course->university->name .'</a></div><div class="visible-sm visible-xs"><span class="inline-block-sm margin-right10-sm">S$'. $cost_year . 'K / year</span><span class="inline-block-sm margin-right10-sm">'. $course_info->duration .' years</span><span class="inline-block-sm">'. $course_requi->level .'</span></div></div></div><div class="course-stats col-lg-8 col-md-8 col-sm-5 col-xs-12"><div class="pull-right"><div class="cell hidden-sm hidden-xs"><span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Tuition fees excluding living expenses">S$'. $cost_year .'K</span><span class="sub-tip display-block">per year</span></div><div class="cell hidden-sm hidden-xs"><span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">'. $course_info->duration .'</span><span class="sub-tip display-block">years</span></div><div class="cell hidden-sm hidden-xs"><span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">'. $course_requi->level .'</span><span class="sub-tip display-block">grade</span></div><div class="cell hidden-sm hidden-xs course-progression"><div class="see-pathways tip" title="" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Can\'t meet the minimum grades? Click to see available pathways to progress into Bangor University"><i class="fa fa-arrow-up"></i><span class="sub-tip display-block">5 pathways</span></div></div><div class="cell_1"><div class="compare" title="Add to compare"><div class="compare-btn"><input id="compare_'. $course->id .'" data-courseid="'. $course->id .'" type="checkbox" class="compare-btn compareCheckbox" onclick="compare('. $course->id .')"><label id="label_compare_'. $course->id .'" for="compare_'. $course->id .'" class="compare-label btn btn-green">Compare <i class="fa fa-check"></i></label></div></div></div><div class="cell_1"><div id="apply_2" class="btn btn-green apply-btn" onclick="javascript:apply(2)">APPLY</div></div></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div id="" class="arrow-box"><div class="tree"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><div class="info"><h1>Pathway programmes available</h1></div></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right"><div class="info"><a class="whichroute"><i class="fa fa-question-circle" aria-hidden="true"></i> Which pathway should I choose?</a><div id="faq-list" class="martop10"><ul><li><a href="/guide/pathways-to-university-what-is-foundation-program" target="_blank">What is Foundation Program?</a></li><li><a href="/guide/pathways-to-university-what-is-diploma" target="_blank">What is Diploma?</a></li><li><a class="openchat gtt-chat">Ask an education consultant</a></li></ul></div></div></div><div id="diagram" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">svg</div></div></div></div></div></div></div>';
        return $html;
    }
}
