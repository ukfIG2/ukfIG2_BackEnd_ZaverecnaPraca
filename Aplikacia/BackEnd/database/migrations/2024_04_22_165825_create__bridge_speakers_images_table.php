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
        Schema::create('Bridge_speakers_images', function (Blueprint $table) {
            
            $table->unsignedBigInteger('idSpeakers');
            $table->foreign('idSpeakers')->references('idSpeakers')->on('Speakers');

            $table->unsignedBigInteger('idImages');
            $table->foreign('idImages')->references('idImages')->on('Images');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Bridge_speakers_images');
    }
};
