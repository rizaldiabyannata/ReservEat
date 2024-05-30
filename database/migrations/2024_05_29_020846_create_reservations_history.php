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
        Schema::create('reservations_history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('reservation_id');
            $table->enum('status', ['cancel', 'panding ', 'done'])->default('panding');

            $table->foreign('reservation_id')->references('id')->on('reservations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_history');
    }
};
