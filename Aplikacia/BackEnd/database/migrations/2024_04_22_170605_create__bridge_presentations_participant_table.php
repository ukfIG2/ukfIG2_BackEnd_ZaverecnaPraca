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
        Schema::create('Bridge_presentations_participant', function (Blueprint $table) {
            #$table->id();
            $table->timestamps();
            //foreign key presentations participants
            $table->unsignedBigInteger('idPresentation');
            $table->foreign('idPresentation')->references('idPresentation')->on('Presentations');
            $table->unsignedBigInteger('idParticipant');
            $table->foreign('idParticipant')->references('idParticipant')->on('Participants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Bridge_presentations_participant');
    }
};
