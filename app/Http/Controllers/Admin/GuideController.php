<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guide;
use DB;
use Session;
use Redirect;
use Validator;
use Storage;
use Log;
class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guide::orderBy('id', 'DESC')->get();
        $this->viewData = array(
            'title' =>  'Guide | List',
            'data' => $data
            );
        return view( 'admin.guide.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Guide | Create';
        return view( 'admin.guide.create', compact(['title']));
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
                'name'  =>'required',
                'name_en' =>'required',
            ];

            $messages = [
                'name.required' =>'Please enter the name!!',
                'name_en.required' =>'Please enter the name!!',

            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                $data['slug'] = str_slug( $data['name_en'] );
                if($data['question_en']){
                    $data['slug'] = str_slug( $data['question_en'] );
                }else if($data['question']){
                    $data['slug'] = str_slug( $data['question'] ); 
                }else{
                     $data['slug'] = str_slug( $data['question_en'] );    
                }
                $pages = Guide::create($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.guide.index'));
                
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
        $data = Guide::find($id);
        $this->viewData = array(
            'title' => 'Guide | Edit',
            'data' => $data,
        );
        return view ('admin.guide.edit', $this->viewData);
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
                'name' =>'required',
                'name_en' =>'required',
            ];

            $messages = [
                'name.required' =>'Please enter the name!!',
                'name.required' =>'Please enter the name!!',
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                $data['slug'] = str_slug( $data['name_en'] );
                $page = Guide::where('id', $id)->first();
                $page->update($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.guide.index'));
                
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
            Guide::find( $id )->delete();
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
            return route('admin.guide.delete',['id'=>$id]);
        }
        return -1;
    }
}
