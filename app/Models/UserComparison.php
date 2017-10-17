<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserComparison extends Model
{
	protected $fillable = ['user_id', 'course_id'];
}
