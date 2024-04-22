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
        Schema::create('Bridge_presentations_speakers', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idBridge_presentations_speakers');
            $table->timestamps();
            //foreign key presentation and speaker and speakers
            $table->unsignedBigInteger('idPresentation');
            $table->foreign('idPresentation')->references('idPresentation')->on('Presentations');
            $table->unsignedBigInteger('idSpeaker');
            $table->foreign('idSpeaker')->references('idSpeaker')->on('Speakers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Bridge_presentations_speakers');
    }
};
