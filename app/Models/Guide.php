<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $fillable = [
        'name','name_en' , 'slug'
    ];

    public function guide_Topic()
    {
    	return $this->hasMany('App\Models\GuideTopic','guide_id');
    }
}
