<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplyCoursePersonalDetail;
use App\Models\Course;
use App\User;
use Redirect, Carbon\Carbon, DB;

class ApplyCourseController extends Controller
{
	public function index() {
		$data_user_id = DB::table('apply_courses')->where('receive_status', '<>', 0)->groupBy('user_id')->get(['user_id']);
		$user_id = array();
		foreach ($data_user_id as $key => $value) {
			array_push($user_id, $value->user_id);
		}
		$users = ApplyCoursePersonalDetail::whereIn('user_id', $user_id)->get(['id', 'given_name', 'email', 'user_id']);
		return view('admin.apply_course.user_submitted', compact(['users']));
	}

	public function detail($user_id) {
		$user = User::where('id', $user_id)->first();
		$courses = $user->applyCourse;
		if (count($user) > 0) {
			$course_user = DB::table('apply_courses')->where('user_id', $user->id)->get();
			foreach ($courses as $key => $course) {
				foreach ($course_user as $value) {
					if ($course->id == $value->course_id) {
						$course->receive_status = $value->receive_status;
						$course->received = $value->received?Carbon::parse($value->received)->format('d/m/Y'):"";
						$course->review_status = $value->review_status;
						$course->reviewd = isset($value->reviewed)?Carbon::parse($value->reviewed)->format('d/m/Y'):"";
						$course->submit_status = $value->submit_status;
						$course->submitted = isset($value->submitted)?Carbon::parse($value->submitted)->format('d/m/Y'):"";
						$course->outcome_status = $value->outcome_status;
						$course->outcome = isset($value->outcome)?Carbon::parse($value->outcome)->format('d/m/Y'):"";
						$course->note = $value->note;
						break;
					}
				}
			}
		}
		return view('admin.apply_course.detail', compact(['user', 'courses']));
	}

	public function review($user_id) {
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

	public function confirmReview($user_id, $course_id, $status) {
		$course = DB::table('apply_courses')->where('user_id', $user_id)->where('course_id', $course_id)->update(['review_status'=>$status, 'reviewed'=>Carbon::now()->format('Y-m-d')]);

		return Redirect::back();
	}

	// public function denyReview($user_id, $course_id) {
	// 	$data_user_id = DB::table('apply_courses')->where('receive_status', '<>', 0)->groupBy('user_id')->get(['user_id']);
	// 	$user_id = array();
	// 	foreach ($data_user_id as $key => $value) {
	// 		array_push($user_id, $value->user_id);
	// 	}
	// 	$users = DB::table('apply_courses')->where('user_id', $user_id)->where('course_id', $course_id)->where('review_status', 0)->update(['review_status'=>2, 'reviewed'=>Carbon::now()]);
	// 	return Redirect::back();
	// }

	// public function accept() {
	// 	$data_user_id = DB::table('apply_courses')->where('receive_status', '<>', 0)->groupBy('user_id')->get(['user_id']);
	// 	$user_id = array();
	// 	foreach ($data_user_id as $key => $value) {
	// 		array_push($user_id, $value->user_id);
	// 	}
	// 	$users = DB::table('apply_courses')->whereIn('user_id', $user_id)->where('review_status', 0)->update(['review_status'=>1, 'reviewed'=>Carbon::now()]);
	// 	return Redirect::route('admin.applyCourse');
	// }

	// public function deny() {
	// 	$data_user_id = DB::table('apply_courses')->where('receive_status', '<>', 0)->groupBy('user_id')->get(['user_id']);
	// 	$user_id = array();
	// 	foreach ($data_user_id as $key => $value) {
	// 		array_push($user_id, $value->user_id);
	// 	}
	// 	$users = DB::table('apply_courses')->whereIn('user_id', $user_id)->where('review_status', 0)->update(['review_status'=>2, 'reviewed'=>Carbon::now()]);
	// 	return Redirect::route('admin.applyCourse');
	// }

	public function submit($user_id , $course_id, $status) { //1 Commit yes, 2 Commit no
		$users = DB::table('apply_courses')->where('user_id', $user_id)->where('course_id', $course_id)->where('review_status',1)->update(['submit_status'=>$status, 'submitted'=>Carbon::now()->format('Y-m-d')]);

		return Redirect::back();
	}

	public function outcome($user_id, $course_id) {
		$course = Course::where('id', $course_id)->first();
		if (count($course) == 0)
			return Redirect::route('admin.applyCourse');

		return view('admin.apply_course.outcome', compact('course'));
	}

	public function postOutcome($user_id, $course_id, Request $request) {
		$users = DB::table('apply_courses')->where('user_id', $user_id)->where('course_id', $course_id)->update(['outcome_status'=>1, 'outcome'=>Carbon::now()->format('Y-m-d'), 'note'=>$request->note]);

		return Redirect::route('admin.applyCourse.detail',['user_id'=>$user_id]);
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
