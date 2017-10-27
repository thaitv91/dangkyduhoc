<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyCourseEnglishProficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_course_english_proficiencies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('test_date');
            $table->string('certificate');
            $table->string('reference_no');
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
        Schema::dropIfExists('apply_course_english_proficiencies');
    }
}
