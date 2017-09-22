<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubjectCareer;
use App\Models\Subject;
use App\Models\Career;;
use DB;
use Session;
use Redirect;
use Validator;
use Log;

class SubjectCareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubjectCareer::all();
        $this->viewData = array(
            'data'  => $data
        );
        return view('admin.subjectCareer.index', $this->viewData );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $subject = Subject::all();
        $career  = Career::all();
        $this->viewData = array(
            'subject' => $subject,
            'career'  => $career
        ); 
        return view('admin.subjectCareer.create', $this->viewData );
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
                'subject_id'               =>'required',
                'career_id'               =>'required',
                    
                ];

            $messages = [
                'subject_id.required'      =>'Please choose one subject!!',
                'career_id.required'      =>'Please choose one career!!',
                                
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
            DB::beginTransaction();
            $subject_career = SubjectCareer::create($data);
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.subjectCareer.index'));
                
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
        $data = SubjectCareer::find( $id );
        $subject = Subject::all();
        $career  = Career::all();
        $this->viewData = array(
            'data'  => $data,
            'subject' => $subject,
            'career'  => $career
        );
        return view ('admin.subjectCareer.edit', $this->viewData );
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
                'subject_id'               =>'required',
                'career_id'               =>'required',
                    
                ];

            $messages = [
                'subject_id.required'      =>'Please choose one subject!!',
                'career_id.required'      =>'Please choose one career!!',
                                
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
            DB::beginTransaction();
            $subject_career = SubjectCareer::where('id', $id)->first();
            $subject_career->update($data);
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.subjectCareer.index'));
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
            SubjectCareer::find( $id )->delete();
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
            return route('admin.subjectCareer.delete',['id'=>$id]);
        }
        return -1;
    }
}
