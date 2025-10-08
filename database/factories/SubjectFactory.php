<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories.Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = [
            'Mobile Development' => 'A Very Fun Subject',
            'Web Development' => 'Mediocre At Best',
            'Game Development' => 'The Teacher In This Subject Is Amazing',
            'Internet Of Things' => 'You Learn Alot From This Subject',
            'English' => 'Teaches You Very Good Hard and Soft Skills',
            'Mathamatics' => 'Absolute',
        ];

        $name = fake()->randomElement(array_keys($subjects));

        return [
            'name' => $name,
            'description' => $subjects[$name],
        ];
    }
}
