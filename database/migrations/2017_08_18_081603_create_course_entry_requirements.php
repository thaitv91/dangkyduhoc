<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseEntryRequirements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_entry_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->string('diploma');
            $table->string('level');
            $table->string('international_baccalaureate');
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
        Schema::dropIfExists('course_entry_requirements');    
    }
}
