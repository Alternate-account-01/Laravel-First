<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // call other seeders
    $this->call([
        GuardianSeeder::class,
    ]);

    // create test user
    \App\Models\User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);

    // create 4 classrooms, each with 5 students
    \App\Models\Classroom::factory(4)
        ->hasStudents(5)
        ->create();

    // create subjects manually (avoiding duplicates)
    $subjects = [
        'Mobile Development' => 'A Fun Subject',
        'Web Development' => 'Mediocre At Best',
        'Game Development' => 'The Teacher Is Amazing',
        'Internet Of Things' => 'You Learn A Lot From This Subject',
        'English' => 'Teaches You Very Good Hard and Soft Skills',
        'Mathematics' => 'Hell',
    ];

    foreach ($subjects as $name => $desc) {
        \App\Models\Subject::factory()
            ->hasTeacher(1)
            ->create([
                'name' => $name,
                'description' => $desc,
            ]);
    }
}
}
