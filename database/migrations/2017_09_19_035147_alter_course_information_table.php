<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCourseInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_information', function (Blueprint $table) {
            //
            $table->string('university_code')->nullable()->change();
            $table->dateTime('upcoming_intakes')->nullable()->change();
            $table->string('course_website')->nullable()->change();
            $table->string('duration')->nullable()->change();
            $table->string('about')->nullable()->change();
            $table->string('will_learn')->nullable()->change();
            $table->string('university_information')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_information', function (Blueprint $table) {
            //
        });
    }
}
