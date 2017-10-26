<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsTableApplyCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apply_courses', function (Blueprint $table) {
            $table->date('received')->nullable();
            $table->tinyInteger('receive_status')->default(0);//0 - have not yet applied, 1 - applied, 2-denied
            $table->date('reviewed')->nullable();
            $table->tinyInteger('review_status')->default(0);
            $table->date('submitted')->nullable();
            $table->tinyInteger('submit_status')->default(0);
            $table->date('outcome')->nullable();
            $table->tinyInteger('outcome_status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apply_courses', function (Blueprint $table) {
            $table->dropColumn('received');
            $table->dropColumn('reviewed');
            $table->dropColumn('submitted');
            $table->dropColumn('outcome');
        });
    }
}
