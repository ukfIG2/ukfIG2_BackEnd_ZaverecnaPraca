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
        Schema::create('Bridge_speakers_socialSites', function (Blueprint $table) {

            $table->unsignedBigInteger('idSpeakers');
            $table->foreign('idSpeakers')->references('idSpeakers')->on('Speakers');

            $table->unsignedBigInteger('idSocial_site');
            $table->foreign('idSocial_site')->references('idSocial_site')->on('Social_site');

            $table->string('Account', 100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Bridge_speakers_socialSites');
    }
};
