<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InflexionUserDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('inflexion_user_details', function (Blueprint $table) {
            $table->id('inflexion_detail_id');
            $table->string('inflexion_detail_first');
            $table->string('inflexion_detail_middle');
            $table->string('inflexion_detail_last');
            $table->string('inflexion_detail_street');
            $table->string('inflexion_detail_city');
            $table->string('inflexion_detail_state');
            $table->string('inflexion_detail_country');
            $table->string('inflexion_detail_zip');
            $table->string('inflexion_detail_contact');
            $table->string('inflexion_detail_birth');
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
    }
}
