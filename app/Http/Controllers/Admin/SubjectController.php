<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Career;
use App\Models\SubjectCareer;
use DB;
use Session;
use Redirect;
use Validator;
use Log;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Subject::all();
        $this->viewData = array(
            'title' =>  'Subject | List',
            'data'  => $data
        );
        return view('admin.subject.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $career = Career::all();
        $this->view = array(
            'title' =>  'Subject | Create',
            'career'=> $career
        );
        return view( 'admin.subject.create',  $this->view );
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
        DB::beginTransaction();
            if($data['name_en']){
                    $data['slug'] = str_slug( $data['name_en'] );
                }else if($data['name']){
                    $data['slug'] = str_slug( $data['name'] ); 
                }else{
                     $data['slug'] = str_slug( $data['name_en'] );    
                }
            $subject = Subject::create($data);
            $subject_id = $subject->id;
            foreach ($data['career_id'] as $value) {
                $datas=array(
                'subject_id' => $subject_id,
                'career_id'         => $value,
            );
            $subject_career = SubjectCareer::create($datas);
            }
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.subject.index'));
                
            
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
        $data = Subject::find( $id );
        $subject_career = SubjectCareer::where( 'subject_id', $id )->get();
	    $career_id = [];
        if (count($subject_career) != 0)
            foreach ($subject_career as $key => $value) {
                $career_id[] = $value['career_id']; 
            }
                    
        $career = Career::all();
        // dd($career_id);
        $this->viewData = array(
            'title' =>  'Subject | Edit',
            'data'  => $data,
            'subject_career' => $subject_career,
            'career'  => $career,
            'career_id' => $career_id
        );
        return view ('admin.subject.edit', $this->viewData );
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
        DB::beginTransaction();
            if($data['name_en']){
                    $data['slug'] = str_slug( $data['name_en'] );
                }else if($data['name']){
                    $data['slug'] = str_slug( $data['name'] ); 
                }else{
                     $data['slug'] = str_slug( $data['name_en'] );    
                }
            $subject = Subject::where('id', $id)->first();
            $subject->update($data);

			if(isset($data['career_id'])) {
	            SubjectCareer::where( 'subject_id', $id )->delete();
	            foreach ($data['career_id'] as $value) {
		            $datas          = array(
			            'subject_id' => $id,
			            'career_id'  => $value,
		            );
		            $subject_career = SubjectCareer::create( $datas );
	            }
            }
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.subject.index'));
        foreach ($data['career_id'] as $value) {
                $datas=array(
                'subject_id' => $subject_id,
                'career_id'         => $value,
            );         
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
            Subject::find( $id )->delete();
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
            return route('admin.subject.delete',['id'=>$id]);
        }
        return -1;
    }
}
