<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Bridge_presentations_participant;
use App\Models\Presentations;
use App\Models\Participants;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bridge_presentations_participant>
 */
class Bridge_presentations_participantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idPresentations' => function() {
                return Presentations::all()->random()->idPresentations;
            },
            'idParticipants' => function() {
                return Participants::all()->random()->idParticipants;
            },
        ];
    }
}
