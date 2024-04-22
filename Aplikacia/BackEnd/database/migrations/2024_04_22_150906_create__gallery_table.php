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
        Schema::create('Gallery', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idGallery');
            $table->timestamps();
            //foreign key on conference
            $table->unsignedBigInteger('idConference');
            $table->foreign('idConference')->references('idConference')->on('Conference');
            //foreign key on umages
            $table->unsignedBigInteger('idImages');
            $table->foreign('idImages')->references('idImages')->on('Images');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Gallery');
    }
};
