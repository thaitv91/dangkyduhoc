<?php

use Illuminate\Database\Seeder;

class SubjectCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$myfile = fopen(public_path('subject_courses.json'), "r") or die("Unable to open file!");
        $data = '';
        while(!feof($myfile)) {
            $data .= fgets($myfile);
        }
        fclose($myfile);
        // Process data
        foreach (json_decode($data) as $key => $value) {
            DB::table('course')->whereIn('slug',$value->courses)->update(['subject_slug'=>$value->subject]);
        }
        // end foreach 1
    }
}
