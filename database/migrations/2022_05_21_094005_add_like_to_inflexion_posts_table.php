<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLikeToInflexionPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inflexion_posts', function (Blueprint $table) {
            //
            $table->integer('inflexion_post_like')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inflexion_posts', function (Blueprint $table) {
            //
            Schema::dropIfExists('inflexion_posts');
        });
    }
}
