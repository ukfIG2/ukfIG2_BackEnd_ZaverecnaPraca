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
            $table->bigIncrements('idParticipants');
        
            $table->unsignedBigInteger('idTitle')->nullable();
            $table->foreign('idTitle')->references('idTitle')->on('Title');

            $table->unsignedBigInteger('idFirst_name');
            $table->foreign('idFirst_name')->references('idFirst_name')->on('First_name');

            $table->unsignedBigInteger('idMiddle_name')->nullable();
            $table->foreign('idMiddle_name')->references('idMiddle_name')->on('Middle_name');

            $table->unsignedBigInteger('idLast_name');
            $table->foreign('idLast_name')->references('idLast_name')->on('Last_name');

            $table->unsignedBigInteger('idConference');
            $table->foreign('idConference')->references('idConference')->on('Conference');

            $table->unsignedBigInteger('idEmail');
            $table->foreign('idEmail')->references('idEmail')->on('Email');
        
            $table->string('Token', 255);
            $table->timestamps();
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
