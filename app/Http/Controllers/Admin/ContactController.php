<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Session, Redirect;

class ContactController extends Controller
{
    public function index() {
    	$contacts = Contact::orderBy('created_at', 'desc')->get();

    	return view('admin.contact.index',compact(['contacts']));
    }

    public function show($id) {
    	$contact = Contact::where('id',$id)->first();

    	if (count($contact) == 0) {
    		Session::flash('error', 'Contact was not found');

    		return Redirect::route('admin.contact');
    	}

    	$contact->status = 1;
    	$contact->save();

    	return view('admin.contact.show',compact(['contact']));
    }

    public function destroy($id) {
    	Contact::where('id',$id)->delete();

    	Session::flash('success', 'Delete contact success.');

    	return Redirect::back();
    }

    //TODO : send email
    public function reply($id) {

    }

    public function detail($id) {
    	$data = Contact::where('id', $id)->first();

    	if (count($data) == 0) {
    		return -1;
    	}

    	$data->url = route('admin.contact.reply',['id'=>$id]);

    	return $data;
    }
}
