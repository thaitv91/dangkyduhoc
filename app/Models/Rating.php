<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
     protected $fillable = [
        'name', 'avatar', 'rating', 'content', 'content_en'
    ];
}
