<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = "career";
    
    protected $fillable = [
        'name','name_en', 'description', 'description_en', 'slug', 'regular_hours', 'fixed_pay', 'variable_pay', 'desk_bound', 'smart_casual', 'on_the_move', 'formal_wear'
    ];

    public function subjectCareer(){
    	return $this->hasMany('App\Models\SubjectCareer','career_id');
    }
}
