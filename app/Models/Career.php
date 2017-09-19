<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = "career";
    
    protected $fillable = [
        'name', 'description', 'slug', 'regular_hours', 'fixed_pay', 'variable_pay', 'desk_bound', 'smart_casual', 'on_the_move', 'formal_wear'
    ];
}
