<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('difficulties')->insert([
            'name' => 'Beginner',
            'description' => '101 knowledge'
        ]);

        DB::table('difficulties')->insert([
            'name' => 'Intermediate',
            'description' => '201 knowledge'
        ]);

        DB::table('difficulties')->insert([
            'name' => 'Advanced',
            'description' => 'Good knowledge'
        ]);

        DB::table('difficulties')->insert([
            'name' => 'Master',
            'description' => 'Master knowledge'
        ]);
    }
}
