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
            #$table->id();
            $table->bigIncrements('idSponsor');
            $table->timestamps();
            $table->string('Sponsor_name', 100);
            $table->string('Url', 100);
            //comment text
            $table->text('Comment')->nullable();
            //foreign key to conference
            $table->unsignedBigInteger('idConference');
            $table->foreign('idConference')->references('idConference')->on('Conference');
            //foreign key to images
            $table->unsignedBigInteger('idImages');
            $table->foreign('idImages')->references('idImages')->on('Images');
            
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
