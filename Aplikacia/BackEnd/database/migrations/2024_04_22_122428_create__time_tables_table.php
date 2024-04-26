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
        Schema::create('Time_tables', function (Blueprint $table) {
            $table->bigIncrements('idTime_tables');
            $table->time('Time_start');
            $table->time('Time_end');

            $table->unsignedBigInteger('idStage');
            $table->foreign('idStage')->references('idStage')->on('Stage');
            
            $table->text('Comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Time_tables');
    }
};
