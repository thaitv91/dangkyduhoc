<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "country";
    
    protected $fillable = [
        'name', 'slug'
    ];

    public function university(){
    	return $this->hasMany('App\Models\University','country_id');
    }

}
