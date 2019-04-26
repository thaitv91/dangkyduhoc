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
        // $this->call(UniversityMetasSeeder::class);
        // $this->call(PageSeeder::class);
        // $this->call(HomePageFieldsSeeder::class);
        // $this->call(GuidePageFieldsSeeder::class);
        // $this->call(CourseSeeder::class);
        // $this->call(CourseCostSeeder::class);
        // $this->call(CourseEntryRequirementSeeder::class);
        // $this->call(CourseInformationSeeder::class);
        //$this->call(CourseRankingSeeder::class);
        $this->call(SubjectCourseSeeder::class);
    }
}
