<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FairPopularity;
use App\Models\FairRegister;
use App\Models\Subject;
use Session, Redirect; 

class FairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexPopularity() {
        $data = FairPopularity::all();
        // dd($data[0]->university->name);
        return view('admin.fair.index_popularity');
    }

    public function indexRegister() {
        $data = FairRegister::get();
        return view('admin.fair.index_register', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPopularity()
    {
        return view ('admin.fair.create_popularity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePopularity(Request $request)
    {
        $data = $request->all();
        FairPopularity::create($data);

        Session::flash('success', 'Create item successful');

        return Redirect::back();
    }

    public function editPopularity($id) {
        $data = FairPopularity::where('id', $id)->first();

        if (count($data) == 0) {
            Session::flash('error', 'Data was not found');
            
            return Redirect::back();
        }

        return view('admin.fair.edit_popularity', compact(['data']));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePopularity(Request $request, $id)
    {
        $data = array(
            'category'      =>  $request->category,
            'university_id' =>  $request->university_id,
        );
        $popularity = FairPopularity::where('id', $id)->first();

        if (count($data) == 0) {
            Session::flash('error', 'Data was not found');

            return Redirect::route('admin.fair.indexPopularity');
        }

        $popularity->update($data);

        Session::flash('success', 'Update item successful');

        return Redirect::back();
    }

    public function deletePopularity($id) {
        FairPopularity::where('id', $id)->delete();

        Session::flash('success', 'Delete item successful');

        return Redirect::back();

    }

    public function deleteRegister($id) {
        FairRegister::where('id', $id)->delete();

        Session::flash('success', 'Delete item successful');

        return Redirect::back();

    }

    public function showRegister($id) {
        $data = FairRegister::where('id', $id)->first();
        $subject_ids = explode(',', $data->subject);
        $subjects = Subject::whereIn('id', $subject_ids)->get();
        if (count($data) == 0) {
            Session::flash('error', 'Data was not found.');

            return Redirect::back();
        }

        return view('admin.fair.showRegister', compact(['data', 'subjects']));
    }

}
