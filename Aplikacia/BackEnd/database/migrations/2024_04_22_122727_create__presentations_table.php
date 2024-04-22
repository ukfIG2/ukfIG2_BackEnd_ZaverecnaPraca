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
        Schema::create('Presentations', function (Blueprint $table) {
            $table->bigIncrements('idPresentations');
            $table->string('Name', 100);
            $table->text('Short_description')->nullable();
            $table->text('Long_description')->nullable();
            $table->integer('Max_capacity');

            $table->unsignedBigInteger('idTime_tables');
            $table->foreign('idTime_tables')->references('idTime_tables')->on('Time_tables');

            $table->text('Comment')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Presentations');
    }
};
