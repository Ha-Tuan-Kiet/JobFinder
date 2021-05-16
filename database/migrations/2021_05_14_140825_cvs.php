<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cvs extends Migration
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
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->string('position_apply');
            $table->string('introduction')->nullable();
            $table->string('education');
            $table->string('experience')->nullable();
            $table->string('activity')->nullable();
            $table->string('skill')->nullable();
            $table->string('certificate')->nullable();
            $table->string('hobby')->nullable();
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
