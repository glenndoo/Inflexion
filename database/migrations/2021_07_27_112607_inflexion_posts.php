<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InflexionPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('inflexion_posts', function (Blueprint $table) {
            $table->id('inflexion_post_id');
            $table->longText('inflexion_post_message');
            $table->string('inflexion_post_timestamp');
            $table->integer('inflexion_post_poster');
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
        Schema::dropIfExists('inflexion_posts');
    }
}
