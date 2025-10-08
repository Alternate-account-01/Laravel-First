<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // run individual seeders
        $this->call([
            // ClassroomSeeder::class,
            // StudentSeeder::class,
            GuardianSeeder::class,
        ]);

        // create test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // create 4 classrooms, each with 5 students
        Classroom::factory(4)
            ->hasStudents(5) // <-- make sure your Classroom model has hasMany(Student::class)
            ->create();

       

        Subject:: factory(6)
        ->hasTeacher(1)
        ->create();
        
    }
}
