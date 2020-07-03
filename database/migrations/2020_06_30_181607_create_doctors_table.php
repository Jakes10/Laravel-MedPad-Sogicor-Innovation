<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('doctor_id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('office_location')->unsigned();

            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('office_location')->references('address_id')->on('addresses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
