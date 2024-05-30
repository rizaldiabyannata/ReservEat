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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('restaurant_id');
            $table->unsignedBigInteger('menu_id');
            $table->string('discount_code');
            $table->integer('discount_percentage');
            $table->timestamp('valid_from')->nullable();
            $table->timestamp('valid_to')->nullable();

            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->foreign('menu_id')->references('id')->on('menu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
