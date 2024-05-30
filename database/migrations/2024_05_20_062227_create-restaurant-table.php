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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo_path');
            $table->string('address');
            $table->string('phone_number');
            $table->time('open_time');
            $table->time('close_time');
            $table->string('email');
            $table->string('password');
            $table->unsignedBigInteger('category_id');
            $table->integer('number_of_tables');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('restaurant_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
