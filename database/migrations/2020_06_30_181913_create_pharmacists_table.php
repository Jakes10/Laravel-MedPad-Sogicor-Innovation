<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacists', function (Blueprint $table) {
            $table->bigIncrements('pharmacist_id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('pharmacy_address')->unsigned();
            $table->string('pharmacy_name');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('pharmacy_address')->references('address_id')->on('addresses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmacists');
    }
}
