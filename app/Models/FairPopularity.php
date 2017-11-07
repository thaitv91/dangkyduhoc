<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FairPopularity extends Model
{
    protected $fillable = array('category', 'university_id');

    public function university() {
    	return $this->hasOne('App\Models\University', 'id', 'university_id');
    }
}
