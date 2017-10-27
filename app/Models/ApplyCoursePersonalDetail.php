<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplyCoursePersonalDetail extends Model
{
	protected $fillable = array('user_id', 'given_name', 'family_name', 'email', 'gender', 'dob','country_birth', 'nationality', 'passport_no', 'correspondence_address', 'permanent_address', 'mobile_number', 'home_number', 'enrolment_year', 'is_schoolarship', 'is_self_funded', 'free_consultation', 'disability', 'criminal_record');
}
