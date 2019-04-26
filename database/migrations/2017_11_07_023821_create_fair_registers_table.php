<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFairRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fair_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('university_intake');
            $table->boolean('studying');
            $table->string('current_qualification');
            $table->string('expected_grade');
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
        Schema::dropIfExists('fair_registers');
    }
}
