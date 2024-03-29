<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreditTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('credit_transactions', function (Blueprint $table) {
            //
            $table->integer('current_credit');
            $table->integer('credit_amount');
            $table->unsignedBigInteger('stripe_id')->nullable();
            $table->foreign('stripe_id')->references('id')->on('stripe_payment_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('credit_transactions', function (Blueprint $table) {
            //
        Schema::dropIfExists('credit_transactions');

        });
    }
}
