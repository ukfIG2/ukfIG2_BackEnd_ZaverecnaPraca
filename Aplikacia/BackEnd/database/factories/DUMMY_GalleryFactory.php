<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Gallery;
use App\Models\Conference;
use App\Models\Images;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class DUMMY_GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   //toto hodi random zo zaznamov v tabulke Conference
        return [
            'idConference' => function() {
                return Conference::all()->random()->idConference;
            },
            'idImages' => function() {
                return Images::all()->random()->idImages;
            },
        ];
    }
}
