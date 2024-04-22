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
        Schema::create('Social_site', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idSocial_site');
            $table->timestamps();
            $table->string('Title', 50);
            $table->string('Url', 100);
            //goreign key images
            $table->unsignedBigInteger('idImages');
            $table->foreign('idImages')->references('idImages')->on('Images');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Social_site');
    }
};
