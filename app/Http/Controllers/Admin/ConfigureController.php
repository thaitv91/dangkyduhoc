<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Configure;

class ConfigureController extends Controller
{
    public function index() {
        $title = 'Configure';

    	$configure = Configure::firstOrCreate([]); 
    	
    	return view('admin.configure.index', compact(['title', 'configure']));
    }

    public function update(Request $request) {
    	$configure = Configure::firstOrCreate([]); 

    	foreach ($request->except('_token') as $key => $value) {
    		$configure->$key = $value;
    	}

    	$configure->save();

    	\Session::flash('success', trans('Update success'));

    	return \Redirect::back();
    }
}
