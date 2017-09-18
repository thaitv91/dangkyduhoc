<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = "university";   

    protected $fillable = [
        'name', 'slug', 'country_id', 'logo', 'country_slug'
    ];

    public function country(){
    	return $this->belongsTo('App\Models\Country','country_id');
    }
}
