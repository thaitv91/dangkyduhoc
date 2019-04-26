<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyCoursePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_course_personal_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('given_name');
            $table->string('family_name');
            $table->string('email');
            $table->string('gender');
            $table->date('dob');
            $table->integer('country_birth');
            $table->integer('nationality');
            $table->string('passport_no');
            $table->text('correspondence_address');
            $table->text('permanent_address')->nullable();
            $table->string('mobile_number');
            $table->string('home_number');
            $table->integer('enrolment_year');
            $table->boolean('is_schoolarship')->default(false);
            $table->boolean('is_self_funded')->default(false);
            $table->boolean('free_consultation');
            $table->boolean('disability');
            $table->boolean('criminal_record');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply_course_personal_details');
    }
}
