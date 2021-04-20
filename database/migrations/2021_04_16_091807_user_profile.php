<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->char('phone')->nullable();
            $table->char('first_name')->nullable();
            $table->char('last_name')->nullable();
            $table->char('full_name')->nullable();
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
        Schema::dropIfExists('user_profile');
    }
}