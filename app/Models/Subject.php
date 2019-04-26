<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subject";   

    protected $fillable = [
        'name', 'name_en', 'description', 'description_en', 'slug'
    ];

    public function subjectCareer(){
    	return $this->hasMany('App\Models\SubjectCareer','subject_id');
    }

    public function courses() {
    	return $this->hasMany('App\Models\Course', 'subject_slug', 'slug');
    }
}
