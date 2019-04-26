<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'title', 'lat', 'lng', 'slug'
    ];

    public function university(){
    	return $this->belongsTo('App\Models\University','university_id');
    }
}
