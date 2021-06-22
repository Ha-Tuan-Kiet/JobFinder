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
            $table->string('title');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->text('position_apply');
            $table->text('introduction')->nullable();
            $table->text('education');
            $table->text('experience')->nullable();
            $table->text('activity')->nullable();
            $table->text('skill')->nullable();
            $table->text('certificate')->nullable();
            $table->text('hobby')->nullable();
            $table->unsignedBigInteger('career_id');
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
