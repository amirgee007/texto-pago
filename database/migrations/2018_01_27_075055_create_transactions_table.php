<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->integer('payee_user_id')->unsigned(); //relation
            $table->integer('recipient_user_id')->unsigned(); //relation
            $table->float('amount');
            $table->string('note')->nullable();

            $table->enum('type' ,['payment' ,'withdraw']);
            $table->float('percentage')->nullable();;
            $table->float('commission')->nullable();;
            $table->float('net_payment')->nullable();;
            $table->timestamps();
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('payee_user_id')->references('id')->on('users');
            $table->foreign('recipient_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('payee_user_id');
            $table->dropForeign('recipient_user_id');
        });

        Schema::dropIfExists('transactions');
    }
}
