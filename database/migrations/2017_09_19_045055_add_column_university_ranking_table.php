<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUniversityRankingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('university_ranking', function (Blueprint $table) {
            $table->string('ranking_title_en')->nullable();
            $table->string('ranking_title')->nullable()->change();
            $table->string('ranking_subject_en')->nullable();
            $table->string('ranking_subject')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
