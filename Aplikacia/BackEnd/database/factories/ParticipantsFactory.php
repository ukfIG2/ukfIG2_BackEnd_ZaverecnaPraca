<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Participants;
use App\Models\Title;
use App\Models\First_name;
use App\Models\Middle_name;
use App\Models\Last_name;
use App\Models\Conference;
use App\Models\Email;

use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participants>
 */
class ParticipantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idTitle' => function() {
                return Title::all()->random()->idTitle;
            },
            'idFirst_name' => function() {
                return First_name::all()->random()->idFirst_name;
            },
            'idMiddle_name' => function() {
                return Middle_name::all()->random()->idMiddle_name;
            },
            'idLast_name' => function() {
                return Last_name::all()->random()->idLast_name;
            },
            'idConference' => function() {
                return Conference::all()->random()->idConference;
            },
            'idEmail' => function() {
                return Email::all()->random()->idEmail;
            },
            'Token' => Str::random(64),
        ];
    }
}
