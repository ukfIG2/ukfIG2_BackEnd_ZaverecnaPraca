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
            $table->bigIncrements('idBridge');

            $table->unsignedBigInteger('idPresentations');
            $table->foreign('idPresentations')->references('idPresentations')->on('Presentations');

            $table->unsignedBigInteger('idSpeakers');
            $table->foreign('idSpeakers')->references('idSpeakers')->on('Speakers');

            $table->timestamps();
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
