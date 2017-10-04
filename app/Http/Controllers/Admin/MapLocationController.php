<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\Map;
use App\Models\MapLocation;
use DB;
use Session;
use Redirect;
use Validator;
use Log;
class MapLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MapLocation::all();
        $this->viewData = array(
            'data' => $data
        );
        return view ('admin.mapLocation.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $map = Map::all();
        $this->viewData = array(
            'map' => $map
        );
        return view ('admin.mapLocation.create', $this->viewData);
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
                'name'             =>'required',
                'lat'               =>'required|numeric',
                'lng'               =>'required|numeric',
                'type'              =>'required',
                'map_id'              =>'required'
                ];

            $messages = [
                'name.required'          =>'Please enter the name!!',
                'lat.required'            =>'Please enter the lat!!',
                'lat.numeric'             =>'please enter a valid lat format!!',
                'lng.required'            =>'Please enter the long!!',
                'lng.numeric'            =>'please enter a valid lat format!!',  
                'type.required'          =>'Please choose one type!!',         
                'map_id.required'          =>'Please choose one map!!',         
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
            DB::beginTransaction();
            $mapLocation = MapLocation::create($data);
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.mapLocation.index'));
                
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
        $map = Map::all();
        $data = MapLocation::find( $id );
        $this->viewData = array(
            'map' => $map,
            'data' => $data
        );
        return view ('admin.mapLocation.edit', $this->viewData);
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
                'name'             =>'required',
                'lat'               =>'required|numeric',
                'lng'               =>'required|numeric',
                'type'              =>'required',
                'map_id'              =>'required'
                ];

            $messages = [
                'name.required'          =>'Please enter the name!!',
                'lat.required'            =>'Please enter the lat!!',
                'lat.numeric'             =>'please enter a valid lat format!!',
                'lng.required'            =>'Please enter the long!!',
                'lng.numeric'            =>'please enter a valid lat format!!',  
                'type.required'          =>'Please choose one type!!',         
                'map_id.required'          =>'Please choose one map!!',         
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
            DB::beginTransaction();
            $mapLocation = MapLocation::where('id', $id)->first();
            $mapLocation->update($data);
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.mapLocation.index'));
                
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
            MapLocation::find( $id )->delete();
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
            return route('admin.mapLocation.delete',['id'=>$id]);
        }
        return -1;
    }
}
