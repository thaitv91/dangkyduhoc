<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Scholarships;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Validator;

class ScholarshipController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    // list scholarship
    public function index() {
        $scholarships = Scholarships::all();

        $data = [
            'scholarships' => $scholarships,
            'title' => 'Scholarship | List'
        ];
        return view('admin.scholarship.index', $data);
    }

    // create scholarship
    public function getCreate() {
        $courses = Course::all();
        $data = [
            'courses' => $courses,
            'title' => 'Scholarship | Create'
        ];
        return view('admin.scholarship.create', $data);
    }

    public function postCreate(Request $request) {
        $data = $request->all();

        $rules = [
            'title'             =>'required',
            'title_en'             =>'required',
        ];

        $messages = [
            'title.required'      => 'Please enter the title!!',
            'title_en.required'      => 'Please enter the title_en!!',

        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator) {

            $slug= str_slug( $data['title_en'] );
            $scholarship = new Scholarships;
            $scholarship->course_slug = $data['course'];
            $scholarship->slug = $slug;
            $scholarship->title = $data['title'];
            $scholarship->title_en = $data['title_en'];
            $scholarship->quantity = $data['quantity'];
            $scholarship->quantity_en = $data['quantity_en'];
            $scholarship->description = $data['description'];
            $scholarship->description_en = $data['description_en'];
            if ($scholarship->save()) {
                Session::flash('success', 'Create Scholarship Successfully.');
                return Redirect::route('admin.scholarship');
            }
        }
    }

    public function edit($id) {
        $title = 'Schoolarship | Edit';

        $scholarship = Scholarships::where('id', $id)->first();
        if (count($scholarship) == 0) {
            Session::flash('error', 'Data was not found');

            return Redirect::back();
        }

        return view('admin.scholarship.edit', compact(['title', 'scholarship', 'courses']));
    }

    public function update(Request $request, $id) {
        $scholarship = Scholarships::where('id', $id)->first();
        $scholarship->title = $request->title;
        $scholarship->title_en = $request->title_en;
        $scholarship->description = $request->description;
        $scholarship->description_en = $request->description_en;
        $scholarship->quantity = $request->quantity;
        $scholarship->quantity_en = $request->quantity_en;
        $scholarship->course_slug = $request->course;
        $scholarship->slug = str_slug($request->title);
        $scholarship->save();

        Session::flash('success', 'Update success');

        return Redirect::back();
    }

    public function searchCourse(Request $request) {
        $keyword = $request->keyword;
        $keyword = strtolower($keyword);
        $keyword = str_replace(' ', '%', $keyword);
        $keyword = "%".$keyword."%";

        $data = Course::where('name', 'like', $keyword)->get(['slug', 'name']);

        return $data;
    }

    // delete scholarship
    public function destroy($id) {
        Scholarships::where('id', $id)->delete();

        Session::flash('success', 'Delete item successful');

        return Redirect::route('admin.scholarship');
    }

    // edit scholarship
//    public function getEdit() {
//
//    }
//
//    public function postEdit() {
//
//    }


}
