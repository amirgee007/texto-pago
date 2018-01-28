<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('user_id');
            $table->bigInteger('phone')->unique();
            $table->string('user_name');
            $table->enum('type' ,['commercial' ,'personal']);
            $table->string('commercial_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('pin');
            $table->string('profile_pic')->nullable();
            $table->string('bank_name')->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->float('avail_funds')->default(0);
            $table->boolean('is_admin')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
