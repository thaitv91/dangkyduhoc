<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
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
            'data' => $data
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
        return view( 'admin.subject.create' );
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
        $this->viewData = array(
            'data'  => $data
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
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.subject.index'));
                
            
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
