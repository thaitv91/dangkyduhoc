<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuUniversity extends Model
{
    protected $fillable = ['title', 'type', 'column', 'weight', 'link'];
}
