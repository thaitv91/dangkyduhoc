<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CourseEntryRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	// Get data from file
    	$data = '';
    	$myfile = fopen(public_path('course_entry_requirements.json'), "r") or die("Unable to open file!");
    	while(!feof($myfile)) {
    		$data .= fgets($myfile);
    	}
    	fclose($myfile);
        $errors = fopen(public_path('course_entry_requirements_errors.txt'),'w') or die('Unable to create file!');
    	// Process data
    	foreach (json_decode($data) as $key => $value) {
    		$university_link = $value->course->university_link;
    		$university_link = str_replace('../university/', '', $university_link);
    		$university_slug = str_replace('.html', '', $university_link);

    		$slug = $value->course->slug;
    		$slug = str_replace('file://home/home/ninhhoang/data_course/', '', $slug);
    		$course_slug = str_replace('.html', '', $slug);
    		$course = DB::table('course')->where('slug', $course_slug)->first();

    		if (count($course)) {
                if (!isset($value->requirements->diploma) || !isset($value->requirements->level) || !isset($value->requirements->international_baccalaureate)) {
                    fwrite($errors, $course_slug);
                    fwrite($errors, "\n");
                } else {
                   DB::table('course_entry_requirements')->insert([
                    'course_id'                     =>  $course->id,
                    'diploma'                       =>  $value->requirements->diploma,
                    'level'                         =>  $value->requirements->level,
                    'international_baccalaureate'   =>  $value->requirements->international_baccalaureate,
                    'created_at'                    =>  Carbon::now(),
                    'updated_at'                    =>  Carbon::now(),
                    ]);
                }
    		}
    	}
        fclose($errors);
    }
 }
