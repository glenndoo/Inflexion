<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorDetailModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_detail_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tutor_id');
            $table->longText('hobbies')->nullable();
            $table->longText('tags')->nullable();
            $table->longText('interests')->nullable();
            $table->string('about_me')->nullable();
            
            $table->timestamps();

            $table->foreign('tutor_id')->references('inflexion_user_id')->on('inflexion_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_detail_models');
    }
}
