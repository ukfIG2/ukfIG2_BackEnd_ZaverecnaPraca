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
        Schema::create('Administration', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idAdministration');
            $table->timestamps();
            $table->string('Login', 50);
            $table->string('Password', 126);
            //comment
            $table->text('Comment')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Administration');
    }
};
