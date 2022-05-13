<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->integer('transaction_type')->comment('0 - purchase, 1 - book tutor, 2 - refund, 3 - expiry');
            $table->unsignedBigInteger('tutor_id')->nullable();
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
        Schema::dropIfExists('credit_transactions');
    }
}
