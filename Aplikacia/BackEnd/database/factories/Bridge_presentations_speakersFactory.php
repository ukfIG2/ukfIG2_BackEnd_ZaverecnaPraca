<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Bridge_presentations_speakers;
use App\Models\Presentations;
use App\Models\Speakers;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bridge_presentations_speakers>
 */
class Bridge_presentations_speakersFactory extends Factory
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
            'idSpeakers' => function() {
                return Speakers::all()->random()->idSpeakers;
            },
        ];
    }
}
