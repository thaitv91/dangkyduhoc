<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PageField;
use App\Models\Page;
use DB;
use Session;
use Redirect;
use Validator;
use Log;

class PageFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagefield = PageField::orderBy( 'id', 'DESC' )->get();
        $data = array(
            'pagefield' => $pagefield
        );
        return view( 'admin.pagefield.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = Page::all();
        $data = array(
            'page' => $page
            );
        return view( 'admin.pagefield.create', $data);
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
            'page_id'             =>'required',           
            ];

            $messages = [
            'title.required'      =>'Vui lòng nhập!!',
            'page_id.required'      =>'Vui lòng nhập!!',
                                   
            ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if( $validator->fails()){
            return redirect()->back()->withInput($data)->withErrors($validator);
        }else{
            DB::beginTransaction();
            $data['slug']= str_slug( $data['title'] );
            // dd($data);
            $pagefield = PageField::create($data);
            DB::commit();
            Session::flash('success','Success!');
            return redirect(route('admin.pagefield.index'));
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
        $data = PageField::find($id);
        $page = Page::all();
        $this->viewData = array(
            'data' => $data,
            'page' => $page
        );
        return view ( 'admin.pagefield.edit', $this->viewData );
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
                'page_id'             =>'required',     
            ];
            $messages =[
                'title.required'      =>'Vui lòng nhập!!',
                'page_id.required'      =>'Vui lòng nhập!!',
            ];
            $validator= Validator::make( $request->all(), $rules, $messages);
            if( $validator->fails()){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                $pagefield = PageField::where('id', $id)->first();
                $pagefield->update($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.pagefield.index'));
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
        //
    }

}
