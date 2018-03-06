<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FreeAssessment as Assessment;

class AssessmentController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $title = 'Assessment | List';

    	$assessments = Assessment::all();

    	return view('admin.assessment.index', compact(['assessments', 'title']));
    }

    public function show($id) {
        $title = 'Assessment | Detail';

    	$assessment = Assessment::where('id', $id)->firstOrFail();
        $assessment->status = 1;
        $assessment->save();

    	return view('admin.assessment.show', compact(['assessment', 'title']));
    }

    public function remove($id) {
    	$assessment = Assessment::where('id', $id)->delete();

    	\Session::flash('success', 'Remove item success');

    	return \Redirect::route('admin.assessment.list');
    }
}
