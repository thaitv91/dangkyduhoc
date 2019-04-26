<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseEntryInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_information', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->string('course_code');
            $table->string('university_code');
            $table->dateTime('upcoming_intakes');
            $table->string('course_website');
            $table->string('pathway_programers');
            $table->string('duration');
            $table->string('about');
            $table->string('will_learn');
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
        Schema::dropIfExists('course_information');
    }
}
