<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuideTopic extends Model
{
    protected $fillable = [
        'title', 'title_en', 'slug', 'guide_id'
    ];
}
