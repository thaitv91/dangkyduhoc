<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->insert([
            'name' => 'United Kingdom',
            'slug' => 'UK',
        ]);

        DB::table('country')->insert([
            'name' => 'Australia',
            'slug' => 'AU',
        ]);

        DB::table('country')->insert([
            'name' => 'United States',
            'slug' => 'US',
        ]);

        DB::table('country')->insert([
            'name' => 'Canada',
            'slug' => 'CA',
        ]);

        DB::table('country')->insert([
            'name' => 'Switzerland',
            'slug' => 'CH',
        ]);

        DB::table('country')->insert([
            'name' => 'Ireland',
            'slug' => 'IL',
        ]);
    }
}
