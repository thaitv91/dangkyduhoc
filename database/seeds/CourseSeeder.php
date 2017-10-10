<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$course_main = '';
    	$myfile = fopen(public_path('course_main.json'), "r") or die("Unable to open file!");
    	while(!feof($myfile)) {
    		$course_main .= fgets($myfile);
    	}
    	fclose($myfile);

    	foreach (json_decode($course_main) as $key => $value) {
    		$university_link = $value->university->university_link;
    		$university_link = str_replace('../university/', '', $university_link);
    		$university_slug = str_replace('.html', '', $university_link);

			$slug = $value->course->slug;
			$slug = str_replace('file://home/home/ninhhoang/data_course/', '', $slug);
			$course_slug = str_replace('.html', '', $slug);

			 $course_name = explode(', ', $value->course->name);
			$university = DB::table('university')->where('slug', $university_slug)->first();
			if (count($university)) {
				DB::table('course')->insert([
					'name'          =>  $course_name[0],
                    'classification'=>  $course_name[1],
					'slug'			=>	$course_slug,
					'university_id'	=>	$university->id,
					'created_at'	=>	Carbon::now(),
					'updated_at'	=>	Carbon::now(),
					]);
			}
    	}
    }
}
