<?php

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
            $table->string('email');
            $table->string('password', 60);
            $table->string('last_name');
            $table->string('first_name');
            $table->date('birthday');
            $table->enum('user_type', array('JUNIOR_MEMBER', 'MEMBER', 'ADMIN'));
            $table->string('address');
            $table->integer('maximum_books_can_loan');
            $table->rememberToken();
            $table->timestamps();
            
            $table->index('user_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
