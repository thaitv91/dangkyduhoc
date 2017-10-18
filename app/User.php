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
}
