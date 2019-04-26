<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityMetas extends Model
{
    protected $table = "university_metas";
    protected $fillable = [
        'university_id', 'about', 'about_en', 'campus', 'campus_en', 'facebook', 'twitter', 'youtube', 'flickr', 'website', 'phone'
    ];
    public function university(){
    	return $this->belongsTo('App\Models\University','university_id');
    }
}
