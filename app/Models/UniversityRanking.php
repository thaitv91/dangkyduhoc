<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityRanking extends Model
{
    protected $table = "university_ranking";
    protected $fillable = [
        'university_id', 'ranking_title', 'ranking_title_en', 'ranking_point', 'ranking_subject', 'ranking_subject_en', 'country_slug'
    ];

    public function university(){
    	return $this->belongsTo('App\Models\University','university_id');
    }
}
