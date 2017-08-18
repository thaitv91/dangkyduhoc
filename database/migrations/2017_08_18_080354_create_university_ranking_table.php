<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversityRankingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_ranking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('university_id');
            $table->integer('business_studies');
            $table->integer('logistics');
            $table->integer('linguitics');
            $table->integer('english_literature');
            $table->integer('compuer_science');
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
        Schema::dropIfExists('university_ranking');
    }
}
