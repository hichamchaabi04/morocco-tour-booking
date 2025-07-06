<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id('id_reservation');
        $table->unsignedBigInteger('id_client');
        $table->unsignedBigInteger('id_animal');
        $table->dateTime('date_heure_reservation');
        $table->decimal('prix_total', 8, 2);
        $table->timestamps();

        $table->foreign('id_client')->references('id_client')->on('clients');
        $table->foreign('id_animal')->references('id_animal')->on('animals');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
