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
            'title' => 'List Scholarship'
        ];
        return view('admin.scholarship.index', $data);
    }

    // create scholarship
    public function getCreate() {
        $courses = Course::all();
        $data = [
            'courses' => $courses,
            'title' => 'Create Scholarship'
        ];
        return view('admin.scholarship.create', $data);
    }

    public function postCreate(Request $request) {
        $data = $request->all();

        $rules = [
            'course_slug'               =>'required',
            'name'             =>'required',
            'name_en'             =>'required',
        ];

        $messages = [
            'course_slug.required'      => 'Please enter the course_slug!!',
            'name.required'      => 'Please enter the name!!',
            'name_en.required'      => 'Please enter the name_en!!',

        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator) {
            $course = Course::where('slug', '=', $data['course_slug'])->first();
            if (!$course) {
                Session::flash('error','Opp! Please try again.Error!');
                return redirect()->back()->withInput();
            }

            $slug= str_slug( $data['name_en'] );
            $scholarship = new Scholarships;
            $scholarship->course_slug = $data['course_slug'];
            $scholarship->slug = $slug;
            $scholarship->title = $data['name'];
            $scholarship->title_en = $data['name_en'];
            $scholarship->quantity = $data['quantity'];
            $scholarship->quantity_en = $data['quantity_en'];
            $scholarship->description = $data['description'];
            $scholarship->description_en = $data['description_en'];
            if ($scholarship->save()) {
                Session::flash('success', 'Create Scholarship Successfully.');
                return Redirect::back();
            }
        }
    }

    // delete scholarship
    public function delete() {

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
