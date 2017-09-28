<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = "university";   

    protected $fillable = [
        'name', 'name_en', 'slug', 'country_id', 'logo', 'country_slug'
    ];

    public function country(){
    	return $this->belongsTo('App\Models\Country','country_id');
    }

    public function universityMeta(){
    	return $this->hasMany('App\Models\UniversityMetas','university_id');
    }

    public function universityRanking(){
        return $this->hasMany('App\Models\UniversityRanking','university_id');
    }

    public function universityStatistic(){
        return $this->hasMany('App\Models\UniversityStatistic','university_id');
    }
}
