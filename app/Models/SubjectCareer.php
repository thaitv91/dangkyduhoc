<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectCareer extends Model
{
    protected $table = "subject_career";   

    protected $fillable = [
        'subject_id', 'career_id'
    ];

    public function subject(){
    	return $this->belongsTo('App\Models\Subject','subject_id');
    }

    public function career(){
    	return $this->belongsTo('App\Models\Career','career_id');
    }
}
