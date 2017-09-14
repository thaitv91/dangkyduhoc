<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(UniversityRankingSeeder::class);
        // $this->call(UniversityStatisticSeeder::class);
        // $this->call(CareerSeeder::class);
    	// $this->call(CourseSeeder::class);
        $this->call(CourseEntryRequirementSeeder::class);
    }
}
