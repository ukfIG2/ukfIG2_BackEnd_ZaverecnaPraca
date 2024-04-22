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
        Schema::create('Stage', function (Blueprint $table) {
            #$table->id();
            $table->bigIncrements('idStage');
            $table->timestamps();
            //Create varchar(100) not null
            $table->string('Name', 100);
            //Add foreign key to Conference
            $table->unsignedBigInteger('idConference');
            $table->foreign('idConference')->references('idConference')->on('Conference');
            //text Comment nullable
            $table->text('Comment')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Stage');
    }
};
