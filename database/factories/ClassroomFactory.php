<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = [
            '10 PPLG 1',
            '10 PPLG 2',
            '11 PPLG 1',
            '11 PPLG 2'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($names),
        ];
    }
}
