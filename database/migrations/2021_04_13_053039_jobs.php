<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->text('position');
            $table->char('application_email');
            $table->char('image',255);
            $table->text('details');
            $table->integer('amount');
            $table->integer('experience');
            $table->decimal('salary_max',10,0);
            $table->decimal('salary_min',10,0);
            $table->char('salary_unit',50);
            $table->double('work_time',10,2);
            $table->char('address');
            $table->dateTime('deadline_for_submission');
            $table->char('province_id',5);
            $table->dateTime('created_on');
            $table->dateTime('update_on');
            $table->integer('created_by');
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
        Schema::dropIfExists('job');
    }
}
