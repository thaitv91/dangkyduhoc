<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageField;
use DB;
use Session;
use Redirect;
use Validator;
use Storage;
use Log;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'DESC')->get();
        $data = array(
            'pages' => $pages
            );
        return view( 'admin.page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'admin.page.create');
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
                    
                ];

            $messages = [
            'title.required'      =>'Vui lòng nhập!!',
                                
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                $data['slug'] = str_slug( $data['title'] );
                $pages = Page::create($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.page.index'));
                
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
        $page = Page::find($id);
        $data = array(
            'page' => $page,
        );
        return view ('admin.page.edit', $data);
    }

    public function editPage($id)
    {   
        $fields = PageField::where('page_id', '=', $id)->get();
         $data = array(
            'fields' => $fields
        );
        return view ('admin.page.editpage', $data);
    }

    
    
    public function updatePage(Request $request, $id)
    {
        $data = $request->all();
        dd($data);
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
                'title'           =>'required',    
            ];

            $messages = [
            'title.required'      =>'Vui lòng nhập!!',                    
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                $data['slug'] = str_slug( $data['title'] );
                $page = Page::where('id', $id)->first();
                $page->update($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.page.index'));
                
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
            Page::find( $id )->delete();
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
            return route('admin.page.delete',['id'=>$id]);
        }
        return -1;
    }
}
