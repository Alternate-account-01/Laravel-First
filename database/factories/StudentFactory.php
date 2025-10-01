<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nama' => $this->faker->firstName() . ' ' . $this->faker->lastName(),

            'date_of_birth' => $this->faker->dateTimeBetween('-20 years', '-15 years')->format('Y-m-d'),

            // Assign each student to a classroom
            'classroom_id' => Classroom::factory(),

            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->randomElement([
                'ул. Ленина, д.10, Москва',
                'ул. Невский проспект, д.22, Санкт-Петербург',
                'ул. Советская, д.5, Новосибирск',
                'ул. Победы, д.88, Екатеринбург',
                'ул. Гагарина, д.12, Казань',
                'ул. Мира, д.30, Нижний Новгород',
                'ул. Чехова, д.7, Самара',
                'ул. Пушкина, д.25, Омск',
                'ул. Кирова, д.15, Ростов-на-Дону',
                'ул. Калинина, д.20, Уфа'
            ]),
        ];
    }
}
