<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bridge_speakers_social_sites;
use App\Models\Speakers;
use App\Models\Social_site;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bridge_speakers_social_sites>
 */
class Bridge_speakers_social_sitesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idSpeakers' => function() {
                return Speakers::all()->random()->idSpeakers;
            },
            'idSocial_site' => function() {
                return Social_site::all()->random()->idSocial_site;
            },
            'Account' => $this->faker->word(),
        ];
    }
}
