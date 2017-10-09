<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CustomField;
use Session, Redirect, Validator, DB;

class CustomFieldController extends Controller
{
    private $image;

	public function __construct() {
		$this->image = new FileController;
	}

	public function index() {
		$custom_fields = CustomField::all();

        return view('admin.customField.index', compact(['custom_fields']));
	}

    public function create() {
    	
    	return view('admin.customField.create');
    }

    public function store(Request $request) {
    	$data = $request->all();

        $validator = Validator::make($data, [
            'name'      =>  'required',
            'slug'      =>  'required|unique:custom_fields',
        ]);
        if ($validator->fails()) {

            return Redirect::back()->withInput()->withErrors($validator);
        }

        $slug = CustomField::where('slug', $data['slug'])->first();
        if (count($slug) > 0) {
            $id = CustomField::all()->last()->id;
            $data['slug'] = $data['slug'].'-'.$id; 
        }

        if ($data['type'] == 'text') {
            $data['content'] = trim($content, '</p>');
            $data['content_en'] = trim($content, '</p>');
        }
    	CustomField::create($data);

        Session::flash('success', 'Create field successfully.');

    	return Redirect::route('admin.customField');
    }

    public function checkSlug(Request $request) {
        $slug = $request->slug;

        $check = CustomField::where('slug',$slug)->first();
        if (count($check) > 0)
            return -1;

        return 1;
    }

    public function getSlug(Request $request) {
        $name = $request->name;
        $slug = $request->slug != ''?$request->slug:str_slug($name);

        //Check slug exists
        $check = CustomField::where('slug',$slug)->first();
        if (count($check) > 0) {
            $id = CustomField::all()->last()->id;
            
            return str_slug($name).'-'.$id; 
        }

        return $slug;
    }

    public function edit($id) {
    	$custom_field = CustomField::where('id', $id)->first();

    	if (count($custom_field) == 0) {
            Session::flash('error', 'Data was not found.');

    		return Redirect::route('admin.custom_field');
    	}

    	return view('admin.customField.edit', compact(['custom_field']));
    }

    public function update(Request $request, $id) {
    	$data = $request->all();
    	unset($data['_token']);

        $validator = Validator::make($data, [
            'name'      =>  'required',
            'slug'      =>  'required',
        ]);
        if ($validator->fails()) {

            return Redirect::back()->withInput()->withErrors($validator);
        }

        $slug = CustomField::where('id','<>',$id)->where('slug', $data['slug'])->first();
        if (count($slug) > 0) {
            $id = CustomField::all()->last()->id;
            $data['slug'] = $data['slug'].'-'.$id; 
        }


        if ($data['type'] == 'text') {
            $data['content'] = trim($data['content'], '</p>');
            $data['content_en'] = trim($data['content_en'], '</p>');
        }

    	CustomField::where('id', $id)->update($data);

    	Session::flash('success', 'Update successfully');

    	return Redirect::back();
    }

    public function destroy($id) {
        CustomField::where('id',$id)->delete();

        Session::flash('success', 'Remove field successfully');

        return Redirect::bacK();
    }
}
