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
            #$table->id();
            $table->bigIncrements('idBridge_speakers_socialSites');
            $table->timestamps();
            //foreign key speakers socialsites
            $table->unsignedBigInteger('idSpeaker');
            $table->foreign('idSpeaker')->references('idSpeaker')->on('Speakers');
            $table->unsignedBigInteger('idSocialSites');
            $table->foreign('idSocialSites')->references('idSocialSites')->on('SocialSites');
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
