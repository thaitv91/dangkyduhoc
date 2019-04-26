<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FairPopularity;
use App\Models\FairRegister;
use App\Models\Subject;
use App\Models\University;
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
        $title = 'Fair | Popularity';

        $data = FairPopularity::all();

        return view('admin.fair.index_popularity', compact(['title', 'data']));
    }

    public function indexRegister() {
        $title = 'Fair | Registered | List';

        $data = FairRegister::get();
        
        return view('admin.fair.index_register', compact(['title', 'data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPopularity()
    {
        $title = "Fair | Popularity | Create";

        $universities = University::all();

        return view ('admin.fair.create_popularity', compact(['title', 'universities']));
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

        return Redirect::route('admin.fair.popularity');
    }

    public function editPopularity($id) {
        $title = "Fair | Popularity | Edit";

        $data = FairPopularity::where('id', $id)->first();

        $universities = University::all();

        if (count($data) == 0) {
            Session::flash('error', 'Data was not found');
            
            return Redirect::back();
        }

        return view('admin.fair.edit_popularity', compact(['title', 'data', 'universities']));
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
        $title = 'Fair | Registered | Detail';

        $data = FairRegister::where('id', $id)->first();
        $subject_ids = explode(',', $data->subject);
        $subjects = Subject::whereIn('id', $subject_ids)->get();
        if (count($data) == 0) {
            Session::flash('error', 'Data was not found.');

            return Redirect::back();
        }

        return view('admin.fair.showRegister', compact(['title', 'data', 'subjects']));
    }

}
