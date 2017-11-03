<?php

namespace App\Http\Controllers\User;

use App\Events\EmailSend;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function postContact(Request $request) {
        $data = $request->all();

        // save to contact table
        $contact = new Contact();
        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->whatsapp = $data['whatsapp'];
        $contact->question = $data['question'];
        $contact->save();

        // event send email
        $email_to = 'ninhhoang0207@gmail.com';
        $email = $data['email'];
        $mail_data = [
          'url' => 'http://dangkyduhoc.smartcodes.vn'
        ];

        event(new EmailSend($email_to, $email, $mail_data));

        Session::flash('message-contact', 'Thanks for send contact!');
        return Redirect::back();
    }

    public function getContact(Request $request) {
        $data = $request->all();

        // save to contact table
        $contact = new Contact();
        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->whatsapp = $data['whatsapp'];
        $contact->question = $data['question'];
        $contact->save();

        // event send email
        $email_to = 'ninhhoang0207@gmail.com';
        $email = $data['email'];
        $mail_data = [
          'url' => 'http://dangkyduhoc.smartcodes.vn'
        ];

        event(new EmailSend($email_to, $email, $mail_data));

        Session::flash('message-contact', 'Thanks for send contact!');
        return Redirect::back();
    }
}
