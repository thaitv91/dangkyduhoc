<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App;
use DB;
use Session;
use Redirect;
use Validator;
use Storage;
use Log;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Career::all();
        $this->viewData = array(
            'data' => $data
        );
        return view ( 'admin.career.index', $this->viewData );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'admin.career.create');
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
            $data['regular_hours']        =  isset($data['regular_hours'])?1:0;
            $data['fixed_pay']        =  isset($data['fixed_pay'])?1:0;
            $data['variable_pay']        =  isset($data['variable_pay'])?1:0;
            $data['desk_bound']        =  isset($data['desk_bound'])?1:0;
            $data['smart_casual']        =  isset($data['smart_casual'])?1:0;
            $data['on_the_move']        =  isset($data['on_the_move'])?1:0;
            $data['formal_wear']        =  isset($data['formal_wear'])?1:0;    
            DB::beginTransaction();
            if($data['name_en']){
                    $data['slug'] = str_slug( $data['name_en'] );
                }else if($data['name']){
                    $data['slug'] = str_slug( $data['name'] ); 
                }else{
                     $data['slug'] = str_slug( $data['name_en'] );    
                }
            $career = Career::create($data);
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.career.index'));
                
            
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
        $data = Career::find( $id );
        $this->viewData = array(
            'data'  => $data
        );

        return view('admin.career.edit', $this->viewData);
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
            $data['regular_hours']        =  isset($data['regular_hours'])?1:0;
            $data['fixed_pay']        =  isset($data['fixed_pay'])?1:0;
            $data['variable_pay']        =  isset($data['variable_pay'])?1:0;
            $data['desk_bound']        =  isset($data['desk_bound'])?1:0;
            $data['smart_casual']        =  isset($data['smart_casual'])?1:0;
            $data['on_the_move']        =  isset($data['on_the_move'])?1:0;
            $data['formal_wear']        =  isset($data['formal_wear'])?1:0;    
            DB::beginTransaction();
            if($data['name_en']){
                    $data['slug'] = str_slug( $data['name_en'] );
                }else if($data['name']){
                    $data['slug'] = str_slug( $data['name'] ); 
                }else{
                     $data['slug'] = str_slug( $data['name_en'] );    
                }
            $career = Career::where('id', $id)->first();
            $career->update($data);
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.career.index'));
                
            
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
            Career::find( $id )->delete();
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
            return route('admin.career.delete',['id'=>$id]);
        }
        return -1;
    }
}
