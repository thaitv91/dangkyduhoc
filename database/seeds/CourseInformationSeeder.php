<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CourseInformationSeeder extends Seeder
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
        $field = array(
            'Course Code'               =>  'course_code',
            'University Code'           =>  'university_code',
            'Upcoming Intakes'          =>  'upcoming_intakes',
            'Course WEBSITE (EXTERNAL)' =>  'course_website',
            'Duration'                  =>  'duration',
            'About course'              =>  'about',
            'What you will learn'       =>  'will_learn',
            'University INFORMATION'        =>  'university_infomation',
            );

        $myfile = fopen(public_path('course_infomation.json'), "r") or die("Unable to open file!");
        while(!feof($myfile)) {
            $data .= fgets($myfile);
        }
        fclose($myfile);
        
        // Process data
        foreach (json_decode($data) as $value) {
            $slug = $value->course->slug;
            $slug = str_replace('file://home/home/ninhhoang/data_course/', '', $slug);
            $course_slug = str_replace('.html', '', $slug);

            $course_information = array(
                'created_at'                    =>  Carbon::now(),
                'updated_at'                    =>  Carbon::now(),
                );
            foreach ($value->infomation as $key => $info) {
                if (isset($field[$key]))
                    $course_information[$field[$key]] = $info; 
            }
            $course_information['upcoming_intakes'] = Carbon::parse($course_information['upcoming_intakes']);
            $course_information['university_infomation'] = str_replace('.html', '', $course_information['university_infomation']);

            $course = DB::table('course')->where('slug', $course_slug)->first();
            if (count($course)) {
                $course_information['course_id'] = $course->id;
                DB::table('course_information')->insert($course_information);
            }
        }
    }
}
