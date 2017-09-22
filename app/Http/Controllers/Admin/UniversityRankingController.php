<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityRanking;
use App\Models\Country;
use DB;
use Session;
use Redirect;
use Validator;
use Storage;
use Log;
class UniversityRankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $university_ranking = UniversityRanking::all();
        $this->viewData = array(
            'university_ranking' => $university_ranking
        );
        return view( 'admin.universityRanking.index', $this->viewData );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $university = University::all();
        $country = Country::all();
        $this->viewData = array(
            'university' => $university,
            'country'   => $country
        );

        return view ( 'admin.universityRanking.create', $this->viewData );
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
                'country_slug'  => 'required',
                'ranking_point' => 'numeric'
            ];

            $messages = [
                'university_id.required'  =>  'Please choose one university!!!!',
                'country_slug.required'  =>  'Please choose one country!!!!',
                'ranking_point.numeric'  =>  'Please choose the correct format!!!!',
            ];

            $validator = Validator::make( $request->all(), $rules, $messages );
            if( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            } else {
                DB::beginTransaction();
                $university_ranking = UniversityRanking::create($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.universityRank.index'));   
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
        $country = Country::all();
        $data = UniversityRanking::find( $id );
        $this->viewData = array(
            'university'  => $university,
            'country'     => $country,
            'data'        => $data
        );

        return view( 'admin.universityRanking.edit' , $this->viewData );
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
        $data = $request ->all();
        try {
            $rules = [
                'university_id' => 'required',
                'country_slug'  => 'required',
                'ranking_point' => 'numeric'
            ];

            $messages = [
                'university_id.required'  =>  'Please choose one university!!!!',
                'country_slug.required'  =>  'Please choose one country!!!!',
                'ranking_point.numeric'  =>  'Please enter the correct format!!!!',
            ];

            $validator = Validator::make( $request->all(), $rules, $messages );
            if( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            } else {
                DB::beginTransaction();
                $university_ranking = UniversityRanking::where('id', $id)->first();
                $university_ranking->update( $data );
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.universityRank.index'));   
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
            UniversityRanking::find( $id )->delete();
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
            return route('admin.universityRank.delete',['id'=>$id]);
        }
        return -1;
    }
}
