<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Page::create(
       		array(
       			'title'=>'Home Page', 
       			'slug'=>'home-page',
       			'created_at' => Carbon::now(),
            	'updated_at' => Carbon::now()
       		),
       		array(
       			'title'=>'Guide Page', 
       			'slug'=>'guide-page',
       			'created_at' => Carbon::now(),
            	'updated_at' => Carbon::now()
       		)
       	);
    }
}
