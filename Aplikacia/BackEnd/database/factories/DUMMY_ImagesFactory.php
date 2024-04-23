<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Images>
 */
class DUMMY_ImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $title = 'DUMMYnconnect0' . $this->faker->numberBetween(1, 4) . '.jpg';

        return [
            'Title' => $title,
            'Path_to' => 'public/Images/DUMMY/' . $title,
            'ALT' => $this->faker->sentence,
        ];
    }
}
