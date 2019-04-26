<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUniversityMetaEn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('university_metas', function (Blueprint $table) {
		    $table->string('about_en');
		    $table->string('campus_en');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('university_metas', function(Blueprint $table)
	    {
		    $table->dropColumn('about_en');
		    $table->dropColumn('campus_en');
	    });
    }
}
