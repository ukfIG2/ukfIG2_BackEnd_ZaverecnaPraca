<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FullOneConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert a conference
        $conferenceId = DB::table('conferences')->insertGetId([
            'name' => 'DUMMY_NConnect2024',
            'Date' => Carbon::now(),
            'Comment' => 'DUMMY_Comment',
        ]);

        // Insert two stages
        DB::table('Stage')->insert([
            ['Name' => 'DUMMY_Stage1', 
                'idConference' => $conferenceId, 
                'Comment' => 'DUMMY_Comment1'],
            ['Name' => 'DUMMY_Stage2', 
                'idConference' => $conferenceId, 
                    'Comment' => 'DUMMY_Comment2'],
            // Add other necessary fields here...
        ]);

        // Define time slots
        $timeSlots = [
            ['Time_start' => '08:00', 'Time_end' => '08:45', 'Comment' => 'dummy'],
            ['Time_start' => '09:00', 'Time_end' => '09:45', 'Comment' => 'dummy'],
            ['Time_start' => '10:00', 'Time_end' => '10:45', 'Comment' => 'dummy'],
            ['Time_start' => '11:00', 'Time_end' => '11:45', 'Comment' => 'dummy'],
            ['Time_start' => '11:45', 'Time_end' => '12:30', 'Comment' => 'dummy'],
            ['Time_start' => '12:30', 'Time_end' => '14:00', 'Comment' => 'dummy'],
        ];

        // Insert time slots and presentations for each stage

        $indexTimeslots = 1; // Define $indexTimeslots before the loops


        foreach ($stageIds as $stageId) {
            foreach ($timeSlots as $timeSlot) {
                DB::table('Time_tables')->insert([
                    'Time_start' => $timeSlot['Time_start'],
                    'Time_end' => $timeSlot['Time_end'],
                    'idStage' => $stageId,
                    'Comment' => $timeSlot['Comment'],
                ]);
                //insert presentations
                DB::table('Presentations')->insert([
                    'Name' => 'DUMMY_Presentation' . $index,
                    'Short_description' => 'DUMMY_Short_description',
                    'Long_description' => 'DUMMY_Long_description',
                    'Max_capacity' => 100,
                    'idTime_tables' => $timeTableId,
                    'Comment' => 'DUMMY_Comment',
                ]);
                $indexTimeslots++; // Increment $indexTimeslots after each presentation
            }
        }
    
        First_name::factory()->count(10)->create();
        Middle_name::factory()->count(10)->create();
        Last_name::factory()->count(10)->create();
        Email::factory()->count(10)->create();
        Company::factory()->count(10)->create();
        Position::factory()->count(10)->create();
        Title::factory()->count(10)->create();
        Images::factory()->count(10)->create(); //random between 1 - 4
        Social_site::factory()->count(5)->create();
        Gallery::factory()->count(15)->create();
        Speakers::factory()->count(20)->create();
        Sponsor::factory()->count(5)->create();
        Bridge_speakers_images::factory()->count(20)->create();
        Bridge_presentations_speakers::factory()->count(20)->create();
        Participants::factory()->count(100)->create();




    }
}
