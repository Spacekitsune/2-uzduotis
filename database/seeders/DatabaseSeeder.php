<?php

namespace Database\Seeders;

use App\Models\AttendanceGroup;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\School;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SchoolSeeder::class,
            DifficultySeeder::class,
            AttendanceGroupSeeder::class,
            StudentSeeder::class
        ]);
    }
}
