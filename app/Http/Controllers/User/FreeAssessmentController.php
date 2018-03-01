<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FreeAssessment as Assessment;
use Mail;
use App\Mail\AssessmentApply as AssessmentApply;
use App\Mail\AssessmentNotification as AssessmentNotification;
use App\Jobs\SendMail;

class FreeAssessmentController extends Controller
{
    public function storeAssessment(Request $request) {
    	$assessment = new Assessment;
    	$assessment->course_completed = $request->assessment_course_completed;
    	$assessment->avg_score = $request->assessment_avg_score;
    	$assessment->course_interest = implode(',', $request->assessment_course_interest ? $request->assessment_course_interest : array());
    	$assessment->countries = implode(',', $request->assessment_countries ? $request->assessment_countries : array());
    	$assessment->name = $request->assessment_name;
    	$assessment->email = $request->assessment_email;
    	$assessment->phone = $request->assessment_phone;
    	$assessment->save();

    	$send_mail = (new SendMail($assessment->email));

        dispatch($send_mail);

    	return 1;
    }

    public function sendMail($guess_email = '') {
    	Mail::to($guess_email)->send(new AssessmentApply($guess_email));
    	Mail::to($guess_email)->send(new AssessmentNotification($guess_email));
    }
}
