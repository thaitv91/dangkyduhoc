<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityMetas;
use App\Models\UniversityRanking;
use App\Models\UniversityStatistic;
use App\Models\Country;
use DB;
use Session;
use Redirect;
use Validator;
use Storage;
use Log;
class UniversityMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $university_meta = UniversityMetas::all();
        $this->viewData = array(
            'title' =>  'University Meta | List',
            'university_meta' => $university_meta
        );

        return view('admin.universityMeta.index', $this->viewData);
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
            'title'     =>  'University Meta | Create',
            'university' => $university
        );
        return view( 'admin.universityMeta.create', $this->viewData );
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
                'university_id'         =>'required',
                
                ];

            $messages = [
                'university_id.required'      =>'Please choose one university!!',                
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                $university_meta = UniversityMetas::create($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.universityMeta.index'));                
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
        $data = UniversityMetas::find($id);
        $this->viewData = array(
            'title'     =>   'University Meta | Edit',
            'university'  => $university,
            'data'     => $data
        );
        return view( 'admin.universityMeta.edit', $this->viewData );
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
                'university_id'               =>'required',
             ];
            $messages = [
                'university_id.required'      =>'Please choose one university!!',   
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                $university_meta = UniversityMetas::where('id', $id)->first();
                $university_meta->update($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.universityMeta.index'));                
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
            UniversityMetas::find( $id )->delete();
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
            return route('admin.universityMeta.delete',['id'=>$id]);
        }
        return -1;
    }
}
