<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\First_name; 
use App\Models\Middle_name; 
use App\Models\Last_name;
use App\Models\Email;
use App\Models\Company;
use App\Models\Position;
use App\Models\Title;
use App\Models\Images;
use App\Models\Social_site;
use App\Models\Gallery;
use App\Models\Speakers;
use App\Models\Sponsor;
use App\Models\Bridge_speakers_images;
use App\Models\Bridge_presentations_speakers;
use App\Models\Participants;
use App\Models\Bridge_presentations_participant;
use App\Models\Bridge_speakers_social_sites;
use App\Models\Said_about_us;
use App\Models\Administration;






class FullOneConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert a conference
        $conferenceId = DB::table('Conference')->insertGetId([
            'Title' => 'DUMMY_NConnect2024',
            'Date' => Carbon::now(),
            'Comment' => 'DUMMY_Comment',
        ]);

        /// Insert two stages and store their IDs
        $stageIds = [];
        for ($i = 1; $i <= 2; $i++) {
            $stageIds[] = DB::table('Stage')->insertGetId([
                'Name' => 'DUMMY_Stage' . $i,
                'idConference' => $conferenceId,
                'Comment' => 'DUMMY_Comment' . $i,
    ]);
}

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
                    // Insert into Time_tables and store the ID
                    $timeTableId = DB::table('Time_tables')->insertGetId([
                        'Time_start' => $timeSlot['Time_start'],
                        'Time_end' => $timeSlot['Time_end'],
                        'idStage' => $stageId,
                        'Comment' => $timeSlot['Comment'],
        ]);

        // Insert into Presentations
        DB::table('Presentations')->insert([
            'Name' => 'DUMMY_Presentation' . $indexTimeslots,
            'Short_description' => 'DUMMY_Short_description',
            'Long_description' => 'DUMMY_Long_description',
            'Max_capacity' => rand(0, 100),
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
        Bridge_presentations_participant::factory()->count(100)->create();
        Bridge_speakers_social_sites::factory()->count(5)->create();
        Said_about_us::factory()->count(10)->create();
        Administration::factory()->count(5)->create();
        
        




    }
}
