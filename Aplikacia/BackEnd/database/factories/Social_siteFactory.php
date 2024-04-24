<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Social_site;
use App\Models\Images;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Social_site>
 */
class Social_siteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title' => substr($this->faker->word, 0, 100),
            'Url' => substr($this->faker->url, 0, 100),
            'idImages' => function() {
                return Images::all()->random()->idImages;
            },        
        ];
    }
}
