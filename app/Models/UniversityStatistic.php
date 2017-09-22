<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityStatistic extends Model
{
    protected $table = "university_statistic";

    protected $fillable = [
        'university_id', 'year_founded', 'student_population', 'staff_population', 'male_number', 'female_number', 'international_students'
    ];

    public function university(){
    	return $this->belongsTo('App\Models\University','university_id');
    }
}
