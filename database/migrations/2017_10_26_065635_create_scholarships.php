<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();;
            $table->string('title_en')->nullable();
            $table->string('description')->nullable();
            $table->string('description_en')->nullable();
            $table->string('quantity')->nullable();
            $table->string('quantity_en')->nullable();
            $table->string('slug');
            $table->string('course_slug');
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
        Schema::dropIfExists('scholarships');
    }
}
