<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserMeta;
use Session;
use Redirect;

class SystemController extends Controller
{
    //
	public function activeAccount(Request $request) {
		$user = User::where('id',$request->id)->get(['id','password','isactive'])->first();

		if (isset($user) && ($user->password == $request->code)) {
			if ($user->isactive == 1) {
				Session::flash('success','This account has been actived already!');
				return Redirect::route('login');
			} else {
				$user->isactive = 1;
				$user->save();
				UserMeta::create(['user_id'=>$user->id]);
				Session::flash('success','Account is actived successfully.');
			}
		} else {
			Session::flash('error','Opp! Fail to active this account.Please try again!');
		}
		return Redirect::route('login');
	}
}
