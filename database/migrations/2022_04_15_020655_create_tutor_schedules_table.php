<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tutor_id');
            $table->unsignedBigInteger('student_id');
            $table->dateTime('schedule');
            $table->boolean('read')->default(0)->comment('0 - unread, 1 - read');
            $table->integer('status')->comment('0 - pending, 1 - approved, 2 - denied');
            $table->timestamps();

            $table->foreign('tutor_id')->references('inflexion_user_id')->on('inflexion_users')->onDelete('cascade');
            $table->foreign('student_id')->references('inflexion_user_id')->on('inflexion_users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_schedules');
    }
}
