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
        Schema::create('Conference', function (Blueprint $table) {       
            $table->bigIncrements('idConference');
            $table->string('Title', 100);
            $table->date('Date');
            $table->enum('State', ['In_progress', 'finished'])->default('In_progress');
            $table->text('Comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Conference');
    }
};
