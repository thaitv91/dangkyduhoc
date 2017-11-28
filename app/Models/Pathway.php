<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pathway extends Model
{
    protected $table = 'pathway';

    public function mainCourse() {

    	return $this->belongsTo('App\Models\Course', 'main_course_slug', 'slug');
    }

    public function mainUniversity() {

    	return $this->belongsTo('App\Models\University', 'university_main_id', 'id');
    }

    public function pathwayUniversity() {

    	return $this->belongsTo('App\Models\University', 'university_pathway_id', 'id');
    }
}
