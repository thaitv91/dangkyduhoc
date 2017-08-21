<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUniversityRankingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('university_ranking', function(Blueprint $table)
        {
            $table->string('ranking_title');
            $table->string('ranking_point');
            $table->string('ranking_subject');
            $table->string('country_slug');

            $table->dropColumn('business_studies');
            $table->dropColumn('logistics');
            $table->dropColumn('linguitics');
            $table->dropColumn('english_literature');
            $table->dropColumn('compuer_science');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('university_ranking', function(Blueprint $table)
        {
            $table->dropColumn('ranking_title');
            $table->dropColumn('ranking_point');
            $table->dropColumn('ranking_subject');
            $table->dropColumn('country_slug');
            $table->integer('business_studies');
            $table->integer('logistics');
            $table->integer('linguitics');
            $table->integer('english_literature');
            $table->integer('compuer_science');
        });
    }
}
