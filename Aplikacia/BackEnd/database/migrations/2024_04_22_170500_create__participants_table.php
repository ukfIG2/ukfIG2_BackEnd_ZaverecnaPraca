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
        Schema::create('Participants', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idParticipant');
            $table->timestamps();
        
            $table->unsignedBigInteger('idTitle');
            $table->unsignedBigInteger('idFirst_name');
            $table->unsignedBigInteger('idMiddle_name');
            $table->unsignedBigInteger('idLast_name');
            $table->unsignedBigInteger('idConference');
            $table->unsignedBigInteger('idEmail');
        
            $table->foreign('idTitle')->references('idTitle')->on('Title');
            $table->foreign('idFirst_name')->references('idFirst_name')->on('First_name');
            $table->foreign('idMiddle_name')->references('idMiddle_name')->on('Middle_name');
            $table->foreign('idLast_name')->references('idLast_name')->on('Last_name');
            $table->foreign('idConference')->references('idConference')->on('Conference');
            $table->foreign('idEmail')->references('idEmail')->on('Email');
        
            $table->string('Token', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Participants');
    }
};
