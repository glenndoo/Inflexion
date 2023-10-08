<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('notifications', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('student_id'); 
        $table->unsignedBigInteger('tutor_id'); 
        $table->string('message');
        $table->string('type');
        $table->text('data')->nullable();
        $table->timestamps();

        $table->foreign('student_id')->references('inflexion_user_id')->on('inflexion_users')->onDelete('cascade');
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
        Schema::dropIfExists('notifications');
    }
}
