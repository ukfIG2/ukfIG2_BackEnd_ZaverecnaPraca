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
        Schema::create('Said_about_us', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idSaid_about_us');
            $table->timestamps();
            //foreign key title firstname midlename lastname images text company position
            $table->unsignedBigInteger('idTitle');
            $table->foreign('idTitle')->references('idTitle')->on('Title');
            $table->unsignedBigInteger('idFirst_name');
            $table->foreign('idFirst_name')->references('idFirst_name')->on('First_name');
            $table->unsignedBigInteger('idMiddle_name')->nullable();
            $table->foreign('idMiddle_name')->references('idMiddle_name')->on('Middle_name');
            $table->unsignedBigInteger('idLast_name');
            $table->foreign('idLast_name')->references('idLast_name')->on('Last_name');
            $table->unsignedBigInteger('idImages');
            $table->foreign('idImages')->references('idImages')->on('Images');
            $table->text('Text');
            $table->unsignedBigInteger('idCompany');
            $table->foreign('idCompany')->references('idCompany')->on('Company');
            $table->unsignedBigInteger('idPosition');
            $table->foreign('idPosition')->references('idPosition')->on('Position');
            $table->text('Comment')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Said_about_us');
    }
};
