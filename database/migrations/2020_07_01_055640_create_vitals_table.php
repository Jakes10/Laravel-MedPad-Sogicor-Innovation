<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitals', function (Blueprint $table) {
            $table->bigIncrements('vital_id');
            $table->bigInteger('consultation_id')->unsigned();

            $table->string('blood_pressure')->nullable();
            $table->string('body_temperature')->nullable();
            $table->string('heart_rate')->nullable();
            $table->string('respiration_rate')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('blood_type')->nullable();
            $table->timestamps();

            $table->foreign('consultation_id')->references('consultation_id')->on('consultations');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vitals');
    }
}
