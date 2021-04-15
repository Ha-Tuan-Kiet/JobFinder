<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidateApply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_apply', function (Blueprint $table) {
            $table->id();
            $table->char('name',255);
            $table->char('email',155);
            $table->char('phone',15);
            $table->text('introduction',510);
            $table->char('resume',255);
            $table->integer('job_id');
            $table->integer('user_id');
            $table->dateTime('created_on');
            $table->dateTime('updated_on');
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
        Schema::dropIfExists('candidate_apply');
    }
}
