<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Social_site;
use App\Models\Images;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Social_site>
 */
class DUMMY_SocialSiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title' => $this->faker->word,
            'Url' => $this->faker->url,
            'idImages' => function() {
                return Images::all()->random()->idImages;
            },        
        ];
    }
}
