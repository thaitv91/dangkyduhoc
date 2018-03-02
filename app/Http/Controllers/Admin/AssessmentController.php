<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FreeAssessment as Assessment;

class AssessmentController extends Controller
{
    public function index() {
    	$assessments = Assessment::all();

    	return view('admin.assessment.index', compact(['assessments']));
    }

    public function show($id) {
    	$assessment = Assessment::where('id', $id)->firstOrFail();

    	return view('admin.assessment.show', compact(['assessment']));
    }

    public function remove($id) {
    	$assessment = Assessment::where('id', $id)->delete();

    	\Session::flash('success', 'Remove item success');

    	return \Redirect::route('admin.assessment.list');
    }
}
