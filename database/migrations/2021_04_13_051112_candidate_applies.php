<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidateApplies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_applies', function (Blueprint $table) {
            $table->id();
            $table->char('email',155);
            $table->char('phone',15);
            $table->text('introduction',510);
            $table->integer('job_id');
            $table->integer('user_id');
            $table->integer('cv_id');
            $table->integer('company_id');
            $table->boolean('is_active')->nullable();
            $table->boolean('is_applying')->nullable();
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
