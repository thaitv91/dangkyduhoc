<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityStatistic;
use DB;
use Session;
use Redirect;
use Validator;
use Log;
class UniversityStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UniversityStatistic::all();
        $this->viewData = array(
            'title' =>  'University Statistic | List',
            'data'  => $data
        );
        return view ( 'admin.universityStatistic.index', $this->viewData );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $university = University::all();
        $this->viewData = array(
            'title'     =>  'University Statistic | Create',
            'university'  => $university
        );
        return view( 'admin.universityStatistic.create', $this->viewData );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        try {
            $rules = [
                'university_id' => 'required',
                'year_founded'  => 'required',
                'student_population' => 'required|numeric',
                'staff_population' => 'required|numeric',
                'male_number' => 'required|numeric',
                'female_number' => 'required|numeric',
                'international_students' => 'required|numeric',
            ];

            $messages = [
                'university_id.required'  =>  'Please choose one university!!!!',
                'year_founded.required'  =>  'Please choose one year!!!!',
                'student_population.required'  =>  'Please enter the student population!!!!',
                'student_population.numeric'  =>  'Please enter the correct format!!!!',
                'staff_population.required'  =>  'Please enter the staff population!!!!',
                'staff_population.numeric'  =>  'Please enter the correct format!!!!',
                'male_number.required'  =>  'Please enter the male number!!!!',
                'male_number.numeric'  =>  'Please enter the correct format!!!!',
                'female_number.required'  =>  'Please enter female number!!!!',
                'female_number.numeric'  =>  'Please enter the correct format!!!!',
                'international_students.required'  =>  'Please enter the international students!!!!',
                'international_students.numeric'  =>  'Please enter the correct format!!!!',
            ];

            $validator = Validator::make( $request->all(), $rules, $messages );
            if( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            } else {
                DB::beginTransaction();
                $universityStatistic = UniversityStatistic::create($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.universityStatistic.index'));   
            }
        } catch (Exception $e) {
            Session::flash('error','Opp! Please try again.Error!');
            DB::rollback();
        }
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
    public function edit($id)
    {
        $university = University::all();
        $data = UniversityStatistic::find( $id );
        $this->viewData = array(
            'title'     =>  'University Statistic | Edit',
            'university' => $university,
            'data'       => $data
        );

        return  view ( 'admin.universityStatistic.edit', $this->viewData );
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
        $data = $request->all();
        try {
            $rules = [
                'university_id' => 'required',
                'year_founded'  => 'required',
                'student_population' => 'required|numeric',
                'staff_population' => 'required|numeric',
                'male_number' => 'required|numeric',
                'female_number' => 'required|numeric',
                'international_students' => 'required|numeric',
            ];

            $messages = [
                'university_id.required'  =>  'Please choose one university!!!!',
                'year_founded.required'  =>  'Please choose one year!!!!',
                'student_population.required'  =>  'Please enter the student population!!!!',
                'student_population.numeric'  =>  'Please enter the correct format!!!!',
                'staff_population.required'  =>  'Please enter the staff population!!!!',
                'staff_population.numeric'  =>  'Please enter the correct format!!!!',
                'male_number.required'  =>  'Please enter the male number!!!!',
                'male_number.numeric'  =>  'Please enter the correct format!!!!',
                'female_number.required'  =>  'Please enter female number!!!!',
                'female_number.numeric'  =>  'Please enter the correct format!!!!',
                'international_students.required'  =>  'Please enter the international students!!!!',
                'international_students.numeric'  =>  'Please enter the correct format!!!!',
            ];

            $validator = Validator::make( $request->all(), $rules, $messages );
            if( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            } else {
                DB::beginTransaction();
                $universityStatistic = UniversityStatistic::where('id' , $id)->first();
                $universityStatistic->update($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.universityStatistic.index'));   
            }
        } catch (Exception $e) {
            Session::flash('error','Opp! Please try again.Error!');
            DB::rollback();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            UniversityStatistic::find( $id )->delete();
            DB::commit();
            Session::flash('success','Success');
            return Redirect::back();

        } catch(\Exception $e) {
            \Log::info( $e->getMessage() );
            DB::rollback();
            Session::flash('error','Error');
            return Redirect::back();
        }
    }

    public function getUrlDelete(Request $request) {
        $id = $request->id;
        if (isset($id)) {
            return route('admin.universityStatistic.delete',['id'=>$id]);
        }
        return -1;
    }
}
