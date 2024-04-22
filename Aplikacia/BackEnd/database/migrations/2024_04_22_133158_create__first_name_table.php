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
        Schema::create('First_name', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idFirst_name');
            $table->timestamps();
            $table->string('First_name', 25);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('First_name');
    }
};
