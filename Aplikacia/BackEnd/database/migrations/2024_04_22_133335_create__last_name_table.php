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
        Schema::create('Last_name', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idLast_name');
            $table->timestamps();
            $table->string('Last_name', 25);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Last_name');
    }
};
