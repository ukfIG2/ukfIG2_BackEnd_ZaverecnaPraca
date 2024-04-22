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
            //$table->id();
            $table->bigIncrements('idBridge');
            $table->timestamps();
            //foreign key speaker and images
            $table->unsignedBigInteger('idSpeaker');
            $table->foreign('idSpeaker')->references('idSpeaker')->on('Speakers');
            $table->unsignedBigInteger('idImages');
            $table->foreign('idImages')->references('idImages')->on('Images');
            

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
