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
        $pathways = Pathway::all();

        $data = [
            'title' => 'PathWay List',
            'pathways' => $pathways
        ];

        return view('admin.pathway.index', $data);
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
            ->where('main_course_slug', '=', $data['main_course_slug'])
            ->first();

        if ($have_pathway) {
            Session::flash('error', 'Pathway exits');
            return Redirect::back();
        }

        $pathway = new Pathway;
        $pathway->main_course_slug = $data['main_course_slug'];
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
    public function edit($id) {
        $pathway = Pathway::where('id', $id)->first();
        $universities = University::get(['id', 'name']);

        if (count($pathway) == 0) {
            Session::flash('error', 'Data was not found');

            return Redirect::route('admin.pathway');
        }

        return view('admin.pathway.edit', compact(['pathway', 'universities']));
    }

    public function update(Request $request, $id) {
        $pathway = Pathway::find($id);
        $pathway->main_course_slug = $request->main_course_slug;
        $pathway->university_main_id = $request->university_main_id;
        $pathway->university_pathway_id = $request->university_pathway_id;
        $pathway->course_slug = $request->course_slug;
        $pathway->save();

        Session::flash('success', 'Update successful');

        return Redirect::back();
    }

    public function destroy($id) {
        $pathway = Pathway::find($id)->delete();

        Session::flash('success', 'Delete item successful');

        return Redirect::route('admin.pathway');
    }
}
