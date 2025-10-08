<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),

            'subject_id' => Subject::factory(),

            'phone_number' => $this->faker->phoneNumber(),

            'email' => $this->faker->unique()->safeEmail(),

            'address' => $this->faker->randomElement([
                '123 Main St, New York, NY',
                '456 Elm St, Los Angeles, CA',
                '789 Oak Ave, Chicago, IL',
                '321 Pine Rd, Houston, TX',
                '654 Maple Dr, Phoenix, AZ',
                '987 Cedar Ln, Philadelphia, PA',
                '159 Walnut Blvd, San Antonio, TX',
                '753 Birch Ct, San Diego, CA',
                '852 Aspen Pl, Dallas, TX',
                '951 Willow Way, San Jose, CA'
            ]),
            
        ];
    }
}
