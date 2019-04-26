<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyCourseEducationBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_course_education_backgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('edu_start');
            $table->date('edu_end');
            $table->string('edu_school_name');
            $table->integer('qualification');
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
        Schema::dropIfExists('apply_course_education_backgrounds');
    }
}
