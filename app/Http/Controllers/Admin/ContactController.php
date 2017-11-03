<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Session, Redirect;
use Mail;
use App\Mail\ReplyContact;

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

        if ($contact->status != 2)
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
    public function reply(Request $request, $id=-1) {
        $data = Contact::where('id', $id)->first();
        
        if (count($data) == 0){
            Session::flash('error', 'Send email false');
            return 0;
        }

        $name = $data->name;
        $email = $data->email;
        $question = $data->question;
        $answer = $request->answer;

        if($answer == '') 
            return -1;
        Mail::to($email)->send(new ReplyContact($name, $question, $answer));
        
        $data->status = 2;
        $data->answer = $answer;
        $data->save();

        Session::flash('success', 'Send email success');

        return 1;
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
