<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityMetas;
use App\Models\UniversityRanking;
use App\Models\UniversityStatistic;
use App\Models\Country;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universites = University::all();
        $this->viewData = array(
            'universites' => $universites
        );

        return view('admin.universities.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $country = Country::all();
        $this->viewData  = array(
            'country'  => $country
        );

        return view('admin.universities.create', $this->viewData);
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
        dd($data);
        // save university
        $university = New University;

        // save university_metas


        //save university_ranking

        // save university_statistic
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show($university_slug)
    {
        // donot action
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit($university_slug)
    {
        $university = University::where('slug', '=', $university_slug)->first();
        $data = [
        	'title' => "University: " . $university->name,
        	'university' => $university
        ];

        return view('admin.view_university', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, University $university)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        //
    }
}
