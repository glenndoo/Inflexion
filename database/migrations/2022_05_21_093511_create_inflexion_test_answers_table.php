<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInflexionTestAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inflexion_test_answers', function (Blueprint $table) {
            $table->id('inflexion_answer_id');
            $table->longText('inflexion_answer_choice');
            $table->unsignedBigInteger('inflexion_answer_test');
            $table->integer('inflexion_answer_value');
            $table->timestamps();

            $table->foreign('inflexion_answer_test')->references('inflexion_test_id')->on('inflexion_test_questions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inflexion_test_answers');
    }
}
