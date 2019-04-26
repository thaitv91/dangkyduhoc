<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarships extends Model
{
    protected $table = 'scholarships';

    public function course() {
    	return $this->hasOne('App\Models\Course', 'slug', 'course_slug');
    }
}
