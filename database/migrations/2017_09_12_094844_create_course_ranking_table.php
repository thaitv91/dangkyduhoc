<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseRankingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_ranking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->string('ranking_title');
            $table->integer('ranking_point');
            $table->string('ranking_subject');
            $table->string('country_slug');
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
        Schema::dropIfExists('course_ranking');
    }
}
