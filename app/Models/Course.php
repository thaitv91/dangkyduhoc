<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'course';
    protected $guarded = array();
    private $configure;

    protected $fillable = [
        'name', 'slug', 'subject_slug', 'university_id',
    ];

    public function __construct() {
        $this->configure = Configure::firstOrcreate([]);
    }

    public function university() {
    	return $this->belongsTo('App\Models\University', 'university_id');
    }

    public function cost() {
    	return $this->hasOne('App\Models\CourseCost','course_id');
    }

    public function information() {
    	return $this->hasOne('App\Models\CourseInformation','course_id');
    }

    public function ranking() {
    	return $this->hasMany('App\Models\CourseRanking','course_id');
    }

    public function requirement() {
    	return $this->hasOne('App\Models\CourseRequirement','course_id');
    }

    public function country() {
        $university = $this->university()->first();

        if ($university) {
            $country = $university->country()->first();
            if ($country) 
                return $country->name;
        }

        return null;
    }

    public function costLiving() {
        $cost = $this->cost;
        $currency_rate = isset($this->configure->currency_rate) ? $this->configure->currency_rate : 1;
        $sum = 0;

        if ($cost) {
            $sum = $cost->day_drink_fees + $cost->day_food_fees + $cost->day_accommodation_fees + $cost->day_coffe_fees;
            $sum *= $currency_rate;
        }

        return round($sum, 1);
    }

    public function yearTuitionFee() {
        $cost = $this->cost;
        $currency_rate = isset($this->configure->currency_rate) ? $this->configure->currency_rate : 1;
        $sum = 0;

        if ($cost) {
            $sum = $cost->year_tuition_fees;
            $sum *= $currency_rate;
        }

        return round($sum, 1);
    }

    public function convertCurrency($amount = 0) {
        $currency_rate = isset($this->configure->currency_rate) ? $this->configure->currency_rate : 1;

        return round($amount * $currency_rate, 1);
    }

    public function apply() {
        return $this->hasMany('App\Models\AppyCourse', 'course_id');
    }

    public function similarCourses() {
        return $this->hasMany('App\Models\Course', 'university_id', 'university_id')
                    ->where('subject_slug', $this->subject_slug)
                    ->where('id', '<>', $this->id);
    }
}
