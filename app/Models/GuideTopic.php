<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuideTopic extends Model
{
    protected $fillable = [
        'title', 'title_en', 'slug', 'guide_id'
    ];

    public function guides(){
    	return $this->belongTo('App\Models\Guide','guide_id');
    }
}
