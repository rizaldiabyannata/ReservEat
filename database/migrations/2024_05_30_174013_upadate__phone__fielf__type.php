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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('phone', 12)->change();
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table->integer('phone_number', 12)->change();
        });
        Schema::table('restaurants', function (Blueprint $table) {
            $table->integer('phone_number', 12)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('phone')->change();
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table->integer('phone_number')->change();
        });
        Schema::table('restaurants', function (Blueprint $table) {
            $table->integer('phone_number')->change();
        });
    }
};
