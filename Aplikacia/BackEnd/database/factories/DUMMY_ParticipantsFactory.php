<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Participants;
use App\Models\Title;
use App\Models\FirstName;
use App\Models\MiddleName;
use App\Models\LastName;
use App\Models\Conference;
use App\Models\Email;

use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participants>
 */
class DUMMY_ParticipantsFactory extends Factory
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
                return FirstName::all()->random()->idFirst_name;
            },
            'idMiddle_name' => function() {
                return MiddleName::all()->random()->idMiddle_name;
            },
            'idLast_name' => function() {
                return LastName::all()->random()->idLast_name;
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
