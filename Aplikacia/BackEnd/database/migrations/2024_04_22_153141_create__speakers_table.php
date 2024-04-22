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
            #$table->id();
            $table->bigIncrements('idSpeakers');
            $table->timestamps();
            //foreign key title
            $table->unsignedBigInteger('idTitle');
            $table->foreign('idTitle')->references('idTitle')->on('Title');
            //foreign key firstname
            $table->unsignedBigInteger('idFirst_name');
            $table->foreign('idFirst_name')->references('idFirst_name')->on('First_name');
            //foreign key middlename
            $table->unsignedBigInteger('idMiddle_name')->nullable();
            $table->foreign('idMiddle_name')->references('idMiddle_name')->on('Middle_name');
            //foreign key lastname
            $table->unsignedBigInteger('idLast_name');
            $table->foreign('idLast_name')->references('idLast_name')->on('Last_name');
            //foreign key position
            $table->unsignedBigInteger('idPosition');
            $table->foreign('idPosition')->references('idPosition')->on('Position');
            //doreign key company
            $table->unsignedBigInteger('idCompany');
            $table->foreign('idCompany')->references('idCompany')->on('Company');
            //text Short_description
            $table->text('Short_description');
            //text Long_description
            $table->text('Long_description');
            $table->text('Comment')->nullable();
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
