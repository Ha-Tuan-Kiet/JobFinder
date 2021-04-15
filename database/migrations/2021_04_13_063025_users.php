<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('email');
            $table->char('password');
            $table->integer('user_type');
            $table->char('phone');
            $table->char('first_name');
            $table->char('last_name');
            $table->char('full_name');
            $table->dateTime('date_of_birth');
            $table->boolean('gender');
            $table->char('address');
            $table->char('url_avatar');
            $table->boolean('is_active');
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
