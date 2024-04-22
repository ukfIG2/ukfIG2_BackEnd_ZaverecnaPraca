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
            #$table->id();
            $table->bigIncrements('idPresentations');
            $table->timestamps();
            //Name varhcar 100
            $table->string('Name', 100);
            //short description text
            $table->text('Short_description');
            //long description text
            $table->text('Long_description');
            //Max Capacitz int
            $table->integer('Max_capacity');
            //Add foreign key to Stage
            $table->unsignedBigInteger('idTime_table');
            $table->foreign('idTime_table')->references('idTime_table')->on('Time_tables');
            // comment
            $table->text('Comment')->nullable();
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
