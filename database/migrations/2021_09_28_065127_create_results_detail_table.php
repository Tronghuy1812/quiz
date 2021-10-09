<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results_detail', function (Blueprint $table) {
            $table->unsignedBigInteger('result_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('answers_id');
            $table->primary(['result_id', 'question_id', 'answers_id']);
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
        Schema::dropIfExists('results_detail');
    }
}
