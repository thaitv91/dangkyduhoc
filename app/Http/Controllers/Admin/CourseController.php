<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseCost;
use App\Models\CourseInformation;
use App\Models\CourseRanking;
use App\Models\CourseRequirement;
use Carbon\Carbon;
use DB, Redirect, Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Course::select('id', 'name', 'slug', 'university_id')->paginate(10);
        return view('admin.course.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $universities = University::where('id', '>', 0)->get();
        $countries = Country::select('slug','name')->get();
        return view('admin.course.create', compact(['universities', 'countries']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::beginTransaction();
        $university = University::where('id',$request->university)->first();

        try {
            $data_course = array(
            'name'          =>  $request->name,
            'university_id' =>  $request->university,
            );
            $course = Course::create($data_course);

            $course_id = $course->id;

            $data_cost = array(
                'course_id'                 =>  $course_id,
                'year_tuition_fees'         =>  $request->year_tuition_fees,
                'day_drink_fees'            =>  $request->day_drink_fees,
                'day_food_fees'             =>  $request->day_food_fees,
                'day_accommodation_fees'    =>  $request->day_accommodation_fees,
                'day_coffe_fees'            =>  $request->day_coffe_fees,
                'cost_per_year'             =>  $request->cost_per_year,
            );
            $cost = CourseCost::create($data_cost);

            $data_requirement = array(
                'course_id'                 =>  $course_id,
                'diploma'                   =>  $request->diploma,
                'level'                     =>  $request->level,
                'international_baccalaureate'=> $request->international_baccalaureate,
            );
            $requirement = CourseRequirement::create($data_requirement);

            $data_information = array(
                'course_id'                 =>  $course_id,
                'course_code'               =>  $request->course_code,
                'university_code'           =>  $request->university_code,
                'upcoming_intakes'          =>  isset($request->upcoming_intakes)?Carbon::parse($request->upcoming_intakes):null,
                'course_website'            =>  $request->course_website,
                'duration'                  =>  $request->duiration,
                'about'                     =>  $request->about,
                'will_learn'                =>  $request->will_learn,
                'university_information'    =>  $request->university_information,
            );
            $information = CourseInformation::create($data_information);

            foreach ($request->ranking_title as $key => $value) {
                $data_ranking = array(
                    'course_id'             =>  $course_id,
                    'ranking_title'         =>  $value,
                    'ranking_point'         =>  isset($request->ranking_point[$key])?$request->ranking_point[$key]:null,
                    'ranking_subject'       =>  isset($request->ranking_subject[$key])?$request->ranking_subject[$key]:null,
                    'country_slug'          =>  isset($request->country[$key])?$request->country[$key]:null,
                );
                $data_ranking = CourseRanking::create($data_ranking);
            }

            $course_slug = $university->slug.'-'.str_slug($course->name).'-'.str_slug($information->course_code);
            Course::where('id', $course->id)->update(['slug'=>$course_slug]);

            DB::commit();
        } catch (Exception $e) {
            Session::flash('error', 'Error');
            DB::rollback();
            return Redirect::back();
        }

        Session::flash('success', 'Success');
        return Redirect::route('admin.course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = -1)
    {
        //
        $course = Course::where('id',$id)->first();
        $universities = University::all();
        $countries = Country::all();

        if (count($course) == 0) return Redirect::route('admin.course');

        return view('admin.course.edit',compact(['course', 'universities', 'countries']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        DB::beginTransaction();
        $university = University::where('id',$request->university)->first();

        try {
            $data_course = array(
            'name'          =>  $request->name,
            'university_id' =>  $request->university,
            );
            Course::where('id',$id)->update($data_course);
            $course_id = $id;

            $data_cost = array(
                'course_id'                 =>  $course_id,
                'year_tuition_fees'         =>  $request->year_tuition_fees,
                'day_drink_fees'            =>  $request->day_drink_fees,
                'day_food_fees'             =>  $request->day_food_fees,
                'day_accommodation_fees'    =>  $request->day_accommodation_fees,
                'day_coffe_fees'            =>  $request->day_coffe_fees,
                'cost_per_year'             =>  $request->cost_per_year,
            );
            $cost = CourseCost::where('course_id', $id)->update($data_cost);

            $data_requirement = array(
                'course_id'                 =>  $course_id,
                'diploma'                   =>  $request->diploma,
                'level'                     =>  $request->level,
                'international_baccalaureate'=> $request->international_baccalaureate,
            );
            $requirement = CourseRequirement::where('course_id', $id)->update($data_requirement);

            $data_information = array(
                'course_id'                 =>  $course_id,
                'course_code'               =>  $request->course_code,
                'university_code'           =>  $request->university_code,
                'upcoming_intakes'          =>  isset($request->upcoming_intakes)?Carbon::parse($request->upcoming_intakes):null,
                'course_website'            =>  $request->course_website,
                'duration'                  =>  $request->duiration,
                'about'                     =>  $request->about,
                'will_learn'                =>  $request->will_learn,
                'university_information'    =>  $request->university_information,
            );
            $information = CourseInformation::where('course_id', $id)->update($data_information);

            CourseRanking::where('course_id', $course_id)->delete();
            if (isset($request->ranking_title))
                foreach ($request->ranking_title as $key => $value) {
                    $data_ranking = array(
                        'course_id'             =>  $course_id,
                        'ranking_title'         =>  $value,
                        'ranking_point'         =>  isset($request->ranking_point[$key])?$request->ranking_point[$key]:null,
                        'ranking_subject'       =>  isset($request->ranking_subject[$key])?$request->ranking_subject[$key]:null,
                        'country_slug'          =>  isset($request->country[$key])?$request->country[$key]:null,
                    );
                    $data_ranking = CourseRanking::create($data_ranking);
                }

            $course_slug = $university->slug.'-'.str_slug($data_course['name']).'-'.str_slug($data_information['course_code']);
            Course::where('id', $id)->update(['slug'=>$course_slug]);

            DB::commit();
        } catch (Exception $e) {
            Session::flash('error', 'Error');
            DB::rollback();
            return Redirect::back();
        }

        Session::flash('success', 'Success');
        return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            Course::where('id', $id)->delete();
            CourseCost::where('course_id', $id)->delete();
            CourseInformation::where('course_id', $id)->delete();
            CourseRequirement::where('course_id', $id)->delete();
            CourseRanking::where('course_id', $id)->delete();

            DB::commit();
        } catch (Exception $e) {
            
            Session::flash('error', 'Error');
            DB::rollback();
            return Redirect::back();
        }

        Session::flash('success', 'Success');
        return Redirect::back();
    }

    public function getUrlDelete(Request $request) {
        $id = $request->id;
        if (isset($id)) {
            return route('admin.course.delete',['id'=>$id]);
        }
        return -1;
    }
}
