<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CourseCostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$data = '';
    	
    	$myfile = fopen(public_path('course_cost.json'), "r") or die("Unable to open file!");
    	while(!feof($myfile)) {
    		$data .= fgets($myfile);
    	}
    	fclose($myfile);
    	
    	// Process data
    	foreach (json_decode($data) as $value) {
    		$slug = $value->course->slug;
    		$slug = str_replace('file://home/home/ninhhoang/data_course/', '', $slug);
    		$course_slug = str_replace('.html', '', $slug);

    		$cost = array(
    			'created_at'	=>	Carbon::now(),
    			'updated_at'	=>	Carbon::now(),
    			);

    		foreach ($value->costs as $key => $v) {
    			$cost[$key]	= str_replace(['S$','K'],'',$v);
    		}

    		$course = DB::table('course')->where('slug', $course_slug)->first();
    		if (count($course)) {
    			$cost['course_id'] = $course->id;
    			DB::table('course_costs')->insert($cost);
    		}
    	}
    }
}
