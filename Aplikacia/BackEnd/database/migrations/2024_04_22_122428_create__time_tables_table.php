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
            #$table->id();
            $table->bigIncrements('idTime_table');
            $table->timestamps();
            //Create Time_start Time
            $table->time('Time_start');
            //Create Time_end Time
            $table->time('Time_end');
            //foreign key to stage
            $table->unsignedBigInteger('idStage');
            $table->foreign('idStage')->references('idStage')->on('Stage');
            //Comment
            $table->text('Comment')->nullable();
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
