<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'course';
    protected $guarded = array();

    protected $fillable = [
        'name', 'slug'
    ];

    public function university() {
    	return $this->belongsTo('App\Models\University', 'university_id');
    }

    public function cost() {
    	return $this->hasOne('App\Models\CourseCost','course_id');
    }

    public function information() {
    	return $this->hasOne('App\Models\CourseInformation','course_id');
    }

    public function ranking() {
    	return $this->hasMany('App\Models\CourseRanking','course_id');
    }

    public function requirement() {
    	return $this->hasOne('App\Models\CourseRequirement','course_id');
    }
}
