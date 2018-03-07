<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\Map;
use DB;
use Session;
use Redirect;
use Validator;
use Log;
class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Map::all();
        $this->viewData = array(
            'title' =>  'Map | List',
            'data' => $data
        );
        return view ('admin.map.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Map | Create';
        return view ( 'admin.map.create', compact(['title']) );
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
                'title'             =>'required',
                'lat'               =>'required|numeric',
                'lng'               =>'required|numeric',
                ];

            $messages = [
                'title.required'          =>'Please enter the title!!',
                'lat.required'            =>'Please enter the lat!!',
                'lat.numeric'             =>'please enter a valid lat format!!',
                'lng.required'            =>'Please enter the long!!',
                'lng.numeric'            =>'please enter a valid lat format!!',              
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
            DB::beginTransaction();
            $data['slug'] = str_slug( $data['title'] );
            $map = Map::create($data);
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.map.index'));
                
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
        $data = Map::find( $id );
        $this->viewData = array(
            'title' =>  'Map | Edit',
            'data' => $data,
        );
        return view ( 'admin.map.edit', $this->viewData );
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
                'title'             =>'required',
                'lat'               =>'required|numeric',
                'lng'               =>'required|numeric',
                ];

            $messages = [
                'title.required'          =>'Please enter the title!!',
                'lat.required'            =>'Please enter the lat!!',
                'lat.numeric'             =>'please enter a valid lat format!!',
                'lng.required'            =>'Please enter the long!!',
                'lng.numeric'            =>'please enter a valid lat format!!',           
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
            DB::beginTransaction();
            $data['slug'] = str_slug( $data['title'] );
            $map = Map::where('id', $id)->first();
            $map->update($data);
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.map.index'));
                
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
            Map::find( $id )->delete();
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
            return route('admin.map.delete',['id'=>$id]);
        }
        return -1;
    }
}
