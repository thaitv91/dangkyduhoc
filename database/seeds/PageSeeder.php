<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
      DB::table('pages')->insert([
          'title'=>'Home Page', 
          'slug'=>'home-page',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('pages')->insert([
          'title'=>'Guide Page', 
          'slug'=>'guide-page',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
    }
}
