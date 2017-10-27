<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pathway;
use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PathwayController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    // list pathway
    public function index() {

    }

    // create pathway
    public function getCreate() {
        $main_university = University::where('pathway', '=', 0)->get();
        $pathway_university = University::where('pathway', '=', 1)->get();

        $data = [
            'title' => 'PathWay Create',
            'main_university' => $main_university,
            'pathway_university' => $pathway_university
        ];

        return view('admin.pathway.create', $data);
    }

    public function postCreate( Request $request ) {
        $data = $request->all();
        $have_pathway = Pathway::where('university_main_id', '=', $data['main_uni_id'])
            ->where('university_pathway_id', '=', $data['pathway_uni_id'])
            ->where('course_slug', '=', $data['course_slug'])
            ->first();

        if ($have_pathway) {
            Session::flash('error', 'Pathway exits');
            return Redirect::back();
        }

        $pathway = new Pathway;
        $pathway->university_main_id = $data['main_uni_id'];
        $pathway->university_pathway_id = $data['pathway_uni_id'];
        $pathway->course_slug = $data['course_slug'];
        if ($pathway->save() ) {
            Session::flash('success', 'Create Pathway Success');
            return Redirect::back();
        }
    }

    // delete pathway

    // edit pathway
}
