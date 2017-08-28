<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCareerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('career', function (Blueprint $table) {
            //
            $table->string('slug');
            $table->integer('regular_hours');
            $table->integer('fixed_pay');
            $table->integer('variable_pay');
            $table->integer('desk_bound');
            $table->integer('smart_casual');
            $table->integer('on_the_move');
            $table->integer('formal_wear');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('career', function (Blueprint $table) {
            //
            $table->dropColumn('slug');
            $table->dropColumn('regular_hours');
            $table->dropColumn('fixed_pay');
            $table->dropColumn('variable_pay');
            $table->dropColumn('desk_bound');
            $table->dropColumn('smart_casual');
            $table->dropColumn('on_the_move');
            $table->dropColumn('formal_wear');
        });
    }
}
