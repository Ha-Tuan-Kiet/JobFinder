<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Profiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->char('phone')->nullable();
            $table->char('first_name')->nullable();
            $table->char('last_name')->nullable();
            $table->char('full_name')->nullable();
            $table->dateTime('day_of_birth');
            $table->char('gender');
            $table->char('address');
            $table->char('avatar');
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
        Schema::dropIfExists('profiles');
    }
}
