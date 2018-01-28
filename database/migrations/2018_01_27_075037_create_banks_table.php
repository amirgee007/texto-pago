<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('bank_id');
            $table->string('name');
            $table->bigInteger('account_number');
            $table->float('avail_funds')->default(0);
            $table->integer('user_id')->unsigned(); //relation
            $table->timestamps();
        });

        Schema::table('banks', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
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
            $table->dropForeign('user_id');
        });
        Schema::dropIfExists('banks');
    }
}
