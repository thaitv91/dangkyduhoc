<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplyCoursePersonalDetail;
use App\User;
use Redirect, Carbon\Carbon;

class ApplyCourseController extends Controller
{
   	public function index() {
   		$users = ApplyCoursePersonalDetail::get(['id', 'given_name', 'email', 'user_id']);

   		return view('admin.apply_course.index', compact(['users']));
   	}

   	public function information($user_id) {
   		$user = User::where('id', $user_id)->first();
   		if (!$user) {
   			return Redirect::route('admin.applyCourse');
   		}

        $country_birth = $this->countryBirth();
        $nationality = $this->nationality();
        $qualification = $this->qualification();
        $certificate = $this->certificate();

        return view('admin.apply_course.information', compact(['user', 'country_birth', 'nationality', 'qualification', 'certificate']));
   	}

   	//TODO 
   	public function review() {

   	}

   	public function commit() {

   	}

   	public function outcome() {

   	}

   	public function countryBirth() {
        return $str = [
                '195'=>'Singapore',
                '27'=> 'Brunei',
                '115'=>'Cambodia',
                '46'=>'China',
                '99'=>'Indonesia',
                '124'=>'Laos',
                '155'=>'Malaysia'
            ];
    }

    public function nationality() {
        return [
            '159'=>'Singaporean',
            '28'=>'Bruneian',
            '31'=>'Burmese',
            '33'=>'Cambodian',
            '40'=>'Chinese',
            '62'=>'Filipino',
            '83'=>'Indonesian',
            '98'=>'Laotian',
            '109'=>'Malaysian'
        ];
    }

    public function qualification() {
        return [
            '2'=>"GCE 'O' Levels",
            '3'=>"GCE 'A' Levels",
            '4'=>"Polytechnic Diploma",
            '5'=>"Private Diploma",
            '6'=>"International Baccaleaurate",
            '7'=>"Sijil Tinggi Persekolahan Malaysia",
            '9'=>"Bachelor's",
            '10'=>"Master",
            '8'=>"Other",
        ];
    }

    public function certificate() {
        return [
            "IELTS",
            "TOEFL iBT (internet based)",
            "TOEFL PBT (paper based)",
            "PTE Academic",
            "Cambridge English Advanced (CAE)",
            "Pearson Test of English (PTE)",
            "Occupational English Test"
        ];
    }
}
