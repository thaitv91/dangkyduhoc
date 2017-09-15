<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CourseRankingSeeder extends Seeder
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
    	
    	$myfile = fopen(public_path('course_ranking.json'), "r") or die("Unable to open file!");
    	while(!feof($myfile)) {
    		$data .= fgets($myfile);
    	}
    	fclose($myfile);
    	
    	// Process data
    	foreach (json_decode($data) as $value) {
    		$slug = $value->course->slug;
    		$slug = str_replace('file://home/home/ninhhoang/data_course/', '', $slug);
    		$course_slug = str_replace('.html', '', $slug);

   			$course = DB::table('course')->where('slug', $course_slug)->first();

    		foreach ($value->ranking as $r) {
    			$ranking = array(
    				'created_at'	=>	Carbon::now(),
    				'updated_at'	=>	Carbon::now(),
    				);
    			foreach ($r as $key => $value) {
    				$ranking[$key] = $value;
    			}
    			// end foreach 3
    			if (count($course)) {
    				$ranking['course_id'] = $course->id;
    				DB::table('course_ranking')->insert($ranking);
    			}
    		}
    		// end foreach 2
    	}
    	// end foreach 1
    }
}
