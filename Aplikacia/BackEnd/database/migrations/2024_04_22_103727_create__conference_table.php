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
            #$table->id();
            
            $table->bigIncrements('idConference');

            $table->timestamps();
            //How to write to create a column in a table Varchar(100) name Title and NotNull
            $table->string('Title', 100);
            //How to write to create a column in a table name Date format date
            $table->date('Date');
            //How to write to create a column in a table name State format I need it to have 2 states in_progress and finished must not be null and default is in_progress
            $table->enum('State', ['In_progress', 'finished'])->default('In_progress');
            //How to write to create a column in a table name Comment format text and can be null
            $table->text('Comment')->nullable();
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
