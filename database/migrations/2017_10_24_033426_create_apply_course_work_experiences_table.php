<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyCourseWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_course_work_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('work_start');
            $table->date('work_end');
            $table->string('employer_name');
            $table->string('work_type');
            $table->string('work_description');
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
        Schema::dropIfExists('apply_course_work_experiences');
    }
}
