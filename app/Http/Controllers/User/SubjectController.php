<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\SubjectCareer;
use App;
class SubjectController extends Controller
{
    public function viewDetail( $slug ){
    	$locale = App::getLocale();
     	$subject = Subject::where( 'slug' , $slug )->first();
      $subject_career = SubjectCareer::where('subject_id', $subject['id'])->get();
            if ($locale == 'en') {
                $subject['name']= $subject->name_en;
        		$subject['description'] = $subject->description_en;
            } else {
                $subject['name'] = $subject->name;
                $subject['description'] = $subject->description;
        	}	
      	$this->viewData = array(
        'subject' => $subject,
        'locale'	=> $locale,
        'subject_career' => $subject_career
      	); 
      	return view( 'user.subjects' , $this->viewData );
    }

}
