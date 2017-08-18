<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_costs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->integer('year_tuition_fees');
            $table->integer('day_drink_fees');
            $table->integer('day_food_fees');
            $table->integer('day_accommodation_fees');
            $table->integer('day_coffe_fees');
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
        Schema::dropIfExists('course_costs');
    }
}
