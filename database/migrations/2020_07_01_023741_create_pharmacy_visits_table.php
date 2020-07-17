<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy_visits', function (Blueprint $table) {
            $table->bigIncrements('visitation_id');
            $table->bigInteger('consultation_id')->unsigned();
            $table->bigInteger('pharmacist_id')->unsigned();
            $table->timestamps();

            $table->foreign('consultation_id')->references('consultation_id')->on('consultations');
            $table->foreign('pharmacist_id')->references('pharmacist_id')->on('pharmacists');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmacy_visits');
    }
}
