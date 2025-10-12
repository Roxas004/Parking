<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->string('id_reservation', 50)->primary();
            $table->integer('duree');
            $table->boolean('assuance');
            $table->boolean('contratpro');

            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('id_vehicule');

            $table->timestamps();

            // Clés étrangères
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_vehicule')->references('id_vehicule')->on('voitures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
};
