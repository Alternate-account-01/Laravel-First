<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardian>
 */
class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
    {
        return [
            'nama' => $this->faker->randomElement([
                'James Smith', 'Mary Johnson', 'Robert Williams', 'Patricia Brown', 'John Jones',
                'Jennifer Garcia', 'Michael Miller', 'Linda Davis', 'William Rodriguez', 'Elizabeth Martinez'
            ]),
            'job' => $this->faker->randomElement([
                'Teacher', 'Engineer', 'Doctor', 'DPR', 'Truck Driver',
                'Farmer', 'Store Owner', 'Police Officer', 'Software Developer', 'Business Owner'
            ]),
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
