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
        Schema::create('Images', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idImages');
            $table->timestamps();
            $table->string('Title', 100);
            $table->string('Path_to', 100);
            $table->string('ALT', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Images');
    }
};
