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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',100);
            $table->string('station_of_departure', 100);
            $table->string('station_of_arrival', 100);
            $table->dateTime('time_of_arrival');
            $table->dateTime('time_of_departure');
            $table->string('train_code', 10)->unique();
            $table->string('number_of_coaches', 20);
            $table->integer('on_schedule')->nullable();
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
