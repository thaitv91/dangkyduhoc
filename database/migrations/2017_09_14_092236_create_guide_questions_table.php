<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuideQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question')->nullable();
            $table->text('question_en')->nullable();
            $table->text('answer')->nullable();
            $table->text('answer_en')->nullable();
            $table->string('slug');
            $table->integer('topic_id');
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
        Schema::dropIfExists('guide_questions');
    }
}
