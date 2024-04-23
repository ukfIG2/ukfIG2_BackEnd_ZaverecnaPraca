<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bridge_speakers_images;
use App\Models\Speakers;
use App\Models\Images;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bridge_speakers_images>
 */
class DUMMY_BridgeSpeakersImagesFactory extends Factory
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
                'idImages' => function() {
                    return Images::all()->random()->idImages;
                },
        ];        
    }
}
