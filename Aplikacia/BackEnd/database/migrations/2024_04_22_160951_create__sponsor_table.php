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
        Schema::create('Sponsor', function (Blueprint $table) {
            $table->bigIncrements('idSponsor');
            $table->string('Sponsor_name', 100);
            $table->string('Url', 100)->nullable();

            $table->unsignedBigInteger('idConference');
            $table->foreign('idConference')->references('idConference')->on('Conference');

            $table->unsignedBigInteger('idImages')->nullable();
            $table->foreign('idImages')->references('idImages')->on('Images');

            $table->text('Comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Sponsor');
    }
};
