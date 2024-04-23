<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Speakers;
use App\Models\Title;
use App\Models\FirstName;
use App\Models\MiddleName;
use App\Models\LastName;
use App\Models\Position;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speakers>
 */
class DUMMY_SpeakersFactory extends Factory
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
            'idPosition' => function() {
                return Position::all()->random()->idPosition;
            },
            'idCompany' => function() {
                return Company::all()->random()->idCompany;
            },
            'Short_description' => $this->faker->sentence,
            'Long_description' => $this->faker->paragraph,
            'Comment' => $this->faker->sentence,
        ];
    }
}
