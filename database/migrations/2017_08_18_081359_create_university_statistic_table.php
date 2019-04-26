<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversityStatisticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_statistic', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('university_id');
            $table->integer('year_founded');
            $table->integer('student_population');
            $table->integer('staff_population');
            $table->integer('male_number');
            $table->integer('female_number');
            $table->integer('international_students');
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
        Schema::dropIfExists('university_statistic');
    }
}
