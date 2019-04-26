<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyCourseAdditionalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_course_additional_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('personal_statement')->nullable();
            $table->boolean('question1');
            $table->boolean('question2');
            $table->string('answer1')->nullable();
            $table->string('answer2')->nullable();
            $table->text('verification')->nullable();
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
        Schema::dropIfExists('apply_course_additional_details');
    }
}
