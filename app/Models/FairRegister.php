<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FairRegister extends Model
{
    protected $fillable = array('subject', 'name', 'email', 'mobile', 'university_intake', 'studying', 'current_qualification', 'expected_grade');
}
