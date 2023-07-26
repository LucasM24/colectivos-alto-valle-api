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
        Schema::create('travels', function (Blueprint $table) {
            $table->ulid();
            $table->ulid('origin_city');
            $table->ulid('destiny_city');
            $table->foreignUlid('service_id')->constrained();

            $table->foreign('origin_city')->references('id')->on('cities');
            $table->foreign('destiny_city')->references('id')->on('cities');
            $table->time('hour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travels');
    }
};
