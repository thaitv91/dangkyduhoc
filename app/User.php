<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MailResetPassword;
use Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin() {
        if($this->isadmin == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserInfo() {
        return $this->hasOne('App\UserMeta','user_id');
    }

    /**
    * Send a password reset email to the user
    */
    public function sendPasswordResetNotification($token)
    {   
        $this->notify(new MailResetPassword($token));
    }

    public function courseComparison() {
        return $this->belongsToMany('App\Models\Course', 'user_comparisons', 'user_id', 'course_id');
    }

    public function applyCourse() {
        return $this->belongsToMany('App\Models\Course', 'apply_courses', 'user_id', 'course_id');
    }

    /*
    *Apply courese
    */

    public function personalDetail() {
        return $this->hasOne('App\Models\ApplyCoursePersonalDetail', 'user_id');
    }

    public function education() {
        return $this->hasMany('App\Models\ApplyCourseEducationBackground', 'user_id');
    }

    public function workExperience() {
        return $this->hasMany('App\Models\ApplyCourseWorkExperience', 'user_id');
    }

    public function englishProficiency() {
        return $this->hasMany('App\Models\ApplyCourseEnglishProficiency', 'user_id');
    }

    public function additionalDetail() {
        return $this->hasOne('App\Models\ApplyCourseAdditionalDetail');
    }

    public function document() {
        return $this->hasMany('App\Models\ApplyCourseDocument', 'user_id'); 
    }
}
