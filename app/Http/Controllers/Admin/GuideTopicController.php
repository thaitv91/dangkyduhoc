<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guide;
use App\Models\GuideTopic;
use DB;
use Session;
use Redirect;
use Validator;
use Storage;
use Log;
class GuideTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GuideTopic::orderBy('id', 'DESC')->get();
        $this->viewData = array(
            'title' => 'Guide Topic | List',
            'data' => $data
            );
        return view( 'admin.guideTopic.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $guide = Guide::all();
        $this->viewData = array(
            'title' =>  'Guide Topic | Create',
            'guide' => $guide
        );
        return view('admin.guideTopic.create', $this->viewData);
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
        unset($data['_token']);
        try {
            $rules = [
                'title'               =>'required',
                'title_en'               =>'required',  
                ];

            $messages = [
                'title.required'      =>'Please enter the title!!',
                'title_en.required'      =>'Please enter the title!!',                            
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                if($data['title_en']){
                    $data['slug'] = str_slug( $data['title_en'] );
                }else if($data['title']){
                    $data['slug'] = str_slug( $data['title'] ); 
                }else{
                     $data['slug'] = str_slug( $data['title_en'] );    
                }                $datas = GuideTopic::create($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.guideTopic.index'));
                
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
        $guide = Guide::all();
        $data = GuideTopic::find($id);
        $this->viewData = array(
            'title' =>  'Guide Topic | Edit',
            'guide' => $guide,
            'data'  => $data
        );
        return view('admin.guideTopic.edit', $this->viewData);
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
                'title'               =>'required',
                'title_en'               =>'required',  
                ];

            $messages = [
                'title.required'      =>'Please enter the title!!',
                'title_en.required'      =>'Please enter the title!!',                            
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                if($data['title_en']){
                    $data['slug'] = str_slug( $data['title_en'] );
                }else if($data['title']){
                    $data['slug'] = str_slug( $data['title'] ); 
                }else{
                     $data['slug'] = str_slug( $data['title_en'] );    
                }
                $datas = GuideTopic::where('id', $id)->first();
                $datas->update($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.guideTopic.index'));
                
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
            GuideTopic::find( $id )->delete();
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
            return route('admin.guideTopic.delete',['id'=>$id]);
        }
        return -1;
    }
}
