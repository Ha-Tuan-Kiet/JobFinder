<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('avatar')->nullable();
            $table->string('full_name',100);
            $table->string('email');
            $table->date('Day_of_birth')->nullable();
            $table->string('phone');
            $table->string('gender');
            $table->string('address');
            $table->string('career_goals')->nullable();
            $table->string('education');
            $table->string('experience')->nullable();
            $table->string('activity')->nullable();
            $table->string('skill')->nullable();
            $table->string('certificate')->nullable();
            $table->string('prize')->nullable();
            $table->unsignedBigInteger('candidate_id')->nullable();




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
        Schema::dropIfExists('cvs');
    }
}
