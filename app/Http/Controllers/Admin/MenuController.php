<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuUniversity;
use App\Models\Country;
use App\Models\University;
use Redirect;
use Session;
use DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Menu University';
        $countries = Country::get(['id', 'name']);
        $universities = University::get(['id', 'name', 'slug']);
        $column_1 = MenuUniversity::where('column', 1)->orderBy('weight', 'asc')->get(['id', 'title', 'type', 'column', 'weight', 'link']);
        $column_2 = MenuUniversity::where('column', 2)->orderBy('weight', 'asc')->get(['id', 'title', 'type', 'column', 'weight', 'link']);
        $column_3 = MenuUniversity::where('column', 3)->orderBy('weight', 'asc')->get(['id', 'title', 'type', 'column', 'weight', 'link']);
        $column_4 = MenuUniversity::where('column', 4)->orderBy('weight', 'asc')->get(['id', 'title', 'type', 'column', 'weight', 'link']);

        return view('admin.menu.index', compact(['title', 'column_1', 'column_2', 'column_3', 'column_4', 'countries', 'universities']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Menu University';
        return view('admin.menu.create', compact(['title']));
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
        $weight         = count(MenuUniversity::max('weight')) ? MenuUniversity::max('weight') : 0;
        $data['weight'] = $weight + 1;
        MenuUniversity::create($data);

        Session::flash('success', 'Create success');

        return Redirect::back();
    }

    public function getCountry() {
        $data = Country::get(['id', 'name']);

        return $data;
    }

    public function getUniversity() {
        $data = University::get(['id', 'name', 'slug']);

        return $data;
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request)
    {
        $type = $request->type;
        $title = $request->title;
        $weight = $request->weight;
        $link = $request->link;
        $column = $request->column;
        
        DB::beginTransaction();
        try {
            MenuUniversity::where('column', 1)->delete();
            foreach ($type as $key => $value) {
                $temp = array(
                    'type'      =>  $value,
                    'title'     =>  $title[$key],
                    'weight'    =>  $weight[$key],
                    'link'      =>  $link[$key],
                    'column'    =>  $column[$key],
                );
                MenuUniversity::create($temp);
            }

            DB::commit();
        } catch (Exception $e) {
            
            Session::flash('error', 'Update column 1 fail');
            DB::rollback();

            return Redirect::back();
        }

        Session::flash('success', 'Update column 1 success');

        return Redirect::back();
    }

    public function update2(Request $request)
    {
        $type = $request->type;
        $title = $request->title;
        $weight = $request->weight;
        $link = $request->link;
        $column = $request->column;
        
        DB::beginTransaction();
        try {
            MenuUniversity::where('column', 2)->delete();
            foreach ($type as $key => $value) {
                $temp = array(
                    'type'      =>  $value,
                    'title'     =>  $title[$key],
                    'weight'    =>  $weight[$key],
                    'link'      =>  $link[$key],
                    'column'    =>  $column[$key],
                );
                MenuUniversity::create($temp);
            }

            DB::commit();
        } catch (Exception $e) {
            
            Session::flash('error', 'Update column 2 fail');
            DB::rollback();

            return Redirect::back();
        }

        Session::flash('success', 'Update column 2 success');

        return Redirect::back();
    }

    public function update3(Request $request)
    {
        $type = $request->type;
        $title = $request->title;
        $weight = $request->weight;
        $link = $request->link;
        $column = $request->column;
        
        DB::beginTransaction();
        try {
            MenuUniversity::where('column', 3)->delete();
            foreach ($type as $key => $value) {
                $temp = array(
                    'type'      =>  $value,
                    'title'     =>  $title[$key],
                    'weight'    =>  $weight[$key],
                    'link'      =>  $link[$key],
                    'column'    =>  $column[$key],
                );
                MenuUniversity::create($temp);
            }


            DB::commit();
        } catch (Exception $e) {
            
            Session::flash('error', 'Update column 3 fail');
            DB::rollback();

            return Redirect::back();
        }

        Session::flash('success', 'Update column 3 success');

        return Redirect::back();
    }

    public function update4(Request $request)
    {
        $type = $request->type;
        $title = $request->title;
        $weight = $request->weight;
        $link = $request->link;
        $column = $request->column;
        
        DB::beginTransaction();
        try {
            MenuUniversity::where('column', 4)->delete();
            foreach ($type as $key => $value) {
                $temp = array(
                    'type'      =>  $value,
                    'title'     =>  $title[$key],
                    'weight'    =>  $weight[$key],
                    'link'      =>  $link[$key],
                    'column'    =>  $column[$key],
                );
                MenuUniversity::create($temp);
            }


            DB::commit();
        } catch (Exception $e) {
            
            Session::flash('error', 'Update column 4 fail');
            DB::rollback();

            return Redirect::back();
        }

        Session::flash('success', 'Update column 4 success');

        return Redirect::back();
    }

    public function getUrlDelete(Request $request) {
        $id = $request->id;

        return route('admin.menu.delete', ['id'=>$id]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MenuUniversity::where('id', $id)->delete();

        Session::flash('success', 'Delete item success');

        return Redirect::back();
    }
}
