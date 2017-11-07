<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FairRegister;
use App\Models\University;
use App\Models\PageField;
use Mail;
use App\Mail\FairRegisterMail;
use Redirect, Session;
use DB;

class FairController extends Controller
{
    public function index() {
        $fair_introduce_field = PageField::where('slug', 'fair-introduce')->first();
        $sign_up_perks_field = PageField::where('slug', 'sign-up-to-enjoy-these-perks')->first();
        $university_intake_field = PageField::where('slug', 'university-intake')->first();
        $studying_field = PageField::where('slug', 'studying')->first();
        $current_qualification_field = PageField::where('slug', 'current-qualification')->first();
        if (count($fair_introduce_field)) $fair_introduce_field = $fair_introduce_field->content;
        if (count($sign_up_perks_field)) $sign_up_perks_field = $sign_up_perks_field->content;
        if (count($university_intake_field)) $university_intake_field = $this->renderSelect($university_intake_field->content);
        if (count($studying_field)) $studying_field = $this->renderSelect($studying_field->content);
        if (count($current_qualification_field)) $current_qualification_field = $this->renderSelect($current_qualification_field->content);
    	$universities = University::orderBy('country_slug')->get(['id', 'name', 'slug', 'country_slug']);

    	return view('user.fair', compact(['universities', 'fair_introduce_field', 'sign_up_perks_field', 'university_intake_field', 'studying_field', 'current_qualification_field']));
    }

    public function renderSelect($data) {
        $data = explode(',', $data);
        $html = '';
        foreach ($data as $key => $value) {
            $option = explode(':', $value);
            $html .= '<option value="'.$option[0].'">'.$option[1].'</option>';
        }

        return $html;
    }

    public function register(Request $request) {
    	$data = $request->all();
        $data['subject'] = implode(',', $data['subject']);
    	try {
    		FairRegister::create($data);
    		//TODO: send mail
    		Mail::to($request->email)->send(new FairRegisterMail);

    		DB::commit();
    	} catch (Exception $e) {
			Session::flash('error', 'Opp! Has some wrongs. Try again.');

    		DB::rollback();

    		return Redirect::back();
    	}

    	Session::flash('success', 'Register successful');

    	return Redirect::back();
    }
}
