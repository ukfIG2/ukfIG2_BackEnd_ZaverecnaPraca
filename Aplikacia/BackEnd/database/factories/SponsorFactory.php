<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Sponsor;
use App\Models\Conference;
use App\Models\Images;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sponsor>
 */
class SponsorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Sponsor_name' => substr($this->faker->company, 0, 100),
            'Url' => substr($this->faker->url, 0, 100),
            'idConference' => function() {
                return Conference::all()->random()->idConference;
            },
            'idImages' => function() {
                return Images::all()->random()->idImages;
            },
            'Comment' => $this->faker->sentence,
        ];
    }
}
