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
            $table->bigIncrements('idSocial_site');
            $table->string('Title', 100)->unique();
            $table->string('Url', 100)->nullable();

            $table->unsignedBigInteger('idImages')->nullable();
            $table->foreign('idImages')->references('idImages')->on('Images');
            
            $table->timestamps();
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
