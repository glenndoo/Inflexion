<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InflexionUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('inflexion_users', function (Blueprint $table) {
            $table->id('inflexion_user_id');
            $table->string('inflexion_username');
            $table->string('inflexion_user_pass');
            $table->integer('inflexion_user_type');
            $table->string('inflexion_user_status');
            $table->string('inflexion_user_token');
            $table->integer('inflexion_user_tutor')->nullable();
            $table->integer('inflexion_user_take')->nullable();
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
        //
        Schema::dropIfExists('inflexion_users');
    }
}
