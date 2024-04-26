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
        Schema::create('Speakers', function (Blueprint $table) {
            $table->bigIncrements('idSpeakers');

            $table->unsignedBigInteger('idTitle')->nullable();
            $table->foreign('idTitle')->references('idTitle')->on('Title');

            $table->unsignedBigInteger('idFirst_name');
            $table->foreign('idFirst_name')->references('idFirst_name')->on('First_name');

            $table->unsignedBigInteger('idMiddle_name')->nullable();
            $table->foreign('idMiddle_name')->references('idMiddle_name')->on('Middle_name');

            $table->unsignedBigInteger('idLast_name');
            $table->foreign('idLast_name')->references('idLast_name')->on('Last_name');

            $table->unsignedBigInteger('idPosition')->nullable();
            $table->foreign('idPosition')->references('idPosition')->on('Position');

            $table->unsignedBigInteger('idCompany')->nullable();
            $table->foreign('idCompany')->references('idCompany')->on('Company');

            $table->text('Short_description')->nullable();
            $table->text('Long_description')->nullable();
            $table->text('Comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Speakers');
    }
};
