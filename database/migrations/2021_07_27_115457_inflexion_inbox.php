<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InflexionInbox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('inflexion_inbox', function (Blueprint $table) {
            $table->id('inflexion_inbox_id');
            $table->integer('inflexion_inbox_owner');
            $table->string('inflexion_inbox_subject');
            $table->longText('inflexion_inbox_message');
            $table->integer('inflexion_inbox_rcpt');
            $table->string('inflexion_inbox_date');
            $table->integer('inflexion_inbox_read');
            $table->integer('inflexion_inbox_type');
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
        Schema::dropIfExists('inflexion_inbox');
    }
}
