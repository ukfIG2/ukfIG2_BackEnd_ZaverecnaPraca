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
        Schema::create('Social_sites', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idSocial_sites');
            $table->timestamps();
            $table->string('Account', 50);
            //foreing key of social site
            $table->unsignedBigInteger('idSocial_site');
            $table->foreign('idSocial_site')->references('idSocial_site')->on('Social_site');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Social_sites');
    }
};
