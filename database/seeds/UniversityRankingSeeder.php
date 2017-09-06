<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\University;

class UniversityRankingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Aston University
    	$university_name = 'Aston University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Business Studies', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'QS Business & Management', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Logistics', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'QS Business & Management', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Linguistics', 
    			'ranking_point' => 19, 
    			'ranking_subject' => 'QS Linguistics', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'English and Literature', 
    			'ranking_point' => 37, 
    			'ranking_subject' => 'QS English Language & Literature', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Computer Science', 
    			'ranking_point' => 38, 
    			'ranking_subject' => 'QS Computer Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Bangor University
    	$university_name = 'Bangor University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Diagnostic Imaging', 
    			'ranking_point' => 1, 
    			'ranking_subject' => 'The Times Radiography', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Area Studies', 
    			'ranking_point' => 3, 
    			'ranking_subject' => 'The Times Celtic studies', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Nursing & Health Science', 
    			'ranking_point' => 3, 
    			'ranking_subject' => 'The Times Nursing', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Agriculture & Forestry', 
    			'ranking_point' => 4, 
    			'ranking_subject' => 'The Times Agriculture and Forestry', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'English and Literature', 
    			'ranking_point' => 8, 
    			'ranking_subject' => 'The Times Creative writing', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Social Work & Policy', 
    			'ranking_point' => 12, 
    			'ranking_subject' => 'The Times Social Policy', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Linguistics', 
    			'ranking_point' => 14, 
    			'ranking_subject' => 'The Times Linguistics', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 17, 
    			'ranking_subject' => 'The Times Drama, Dance and Cinematics', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	$university_name = 'Bath Spa University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'English and Literature', 
    			'ranking_point' => 17, 
    			'ranking_subject' => 'The Times Creative writing', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 34, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 34, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Food Science', 
    			'ranking_point' => 35, 
    			'ranking_subject' => 'The Times Food Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Music', 
    			'ranking_point' => 36, 
    			'ranking_subject' => 'The Times Music', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Birmingham City University
    	$university_name = 'Birmingham City University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'English and Literature', 
    			'ranking_point' => 11, 
    			'ranking_subject' => 'The Times Creative writing', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Diagnostic Imaging', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'The Times Radiography', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Surveying & Planning', 
    			'ranking_point' => 19, 
    			'ranking_subject' => 'The Times Town and Country Planning and Landscape', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Education', 
    			'ranking_point' => 31, 
    			'ranking_subject' => 'The Times Education', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Music', 
    			'ranking_point' => 32, 
    			'ranking_subject' => 'The Times Music', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    				
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Nursing & Health Science', 
    			'ranking_point' => 32, 
    			'ranking_subject' => 'The Times Nursing', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Architecture', 
    			'ranking_point' => 33, 
    			'ranking_subject' => 'The Times Architecture', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Brunel University London
    	$university_name = 'Brunel University London';
    	$university = University::where('name', '=', $university_name)->first();

    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Nursing & Health Science', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'The Times Nursing', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Product Design', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'English and Literature', 
    			'ranking_point' => 14, 
    			'ranking_subject' => 'The Times Creative writing', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    				
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Sports Science', 
    			'ranking_point' => 18, 
    			'ranking_subject' => 'The Times Sport Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Mechanical Engineering', 
    			'ranking_point' => 19, 
    			'ranking_subject' => 'The Times Mechanical Engineering', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Coventry University
    	$university_name = 'Coventry University';
    	$university = University::where('name', '=', $university_name)->first();

    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Hospitality & Tourism', 
    			'ranking_point' => 6, 
    			'ranking_subject' => 'CUG Hospitality, Leisure, Recreation & Tourism', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Mathematics', 
    			'ranking_point' => 8, 
    			'ranking_subject' => 'Guardian Mathematics', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Nursing & Health Science', 
    			'ranking_point' => 9, 
    			'ranking_subject' => 'The Times Physiotherapy', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Sports Science', 
    			'ranking_point' => 9, 
    			'ranking_subject' => 'CUG Sports Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'English and Literature', 
    			'ranking_point' => 13, 
    			'ranking_subject' => 'The Times Creative writing', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    				
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Politics', 
    			'ranking_point' => 13, 
    			'ranking_subject' => 'Guardian Politics', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Aeronautical Engineering', 
    			'ranking_point' => 17, 
    			'ranking_subject' => 'The Times Aeronautical and Manufacturing Engineering', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Durham University
    	$university_name = 'Durham University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Archaeology', 
    			'ranking_point' => 1, 
    			'ranking_subject' => 'Guardian Forensic science & archaeology', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Music', 
    			'ranking_point' => 1, 
    			'ranking_subject' => 'The Times Music', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Area Studies', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'The Times East and South Asian Studies', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Education', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'The Times Education', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'English and Literature', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'The Times English', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    				
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Environmental Science', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'The Times Geography and Environmental Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Geography', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'The Times Geography and Environmental Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Law', 
    			'ranking_point' => 4, 
    			'ranking_subject' => 'The Times Law', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Falmouth University
    	$university_name = 'Falmouth University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Product Design', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Media & Communications', 
    			'ranking_point' => 43, 
    			'ranking_subject' => 'The Times Communication and Media Studies', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Music', 
    			'ranking_point' => 43, 
    			'ranking_subject' => 'The Times Music', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Glasgow Caledonian University
    	$university_name = 'Glasgow Caledonian University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Hospitality & Tourism', 
    			'ranking_point' => 3, 
    			'ranking_subject' => 'Guardian Hospitality, event management & tourism', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Social Work & Policy', 
    			'ranking_point' => 6, 
    			'ranking_subject' => 'Guardian Social work', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Biological Science', 
    			'ranking_point' => 8, 
    			'ranking_subject' => 'Guardian Anatomy & physiology', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Food Science', 
    			'ranking_point' => 11, 
    			'ranking_subject' => 'The Times Food Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Nursing & Health Science', 
    			'ranking_point' => 12, 
    			'ranking_subject' => 'The Times Physiotherapy', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Surveying & Planning', 
    			'ranking_point' => 14, 
    			'ranking_subject' => 'The Times Building', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Diagnostic Imaging', 
    			'ranking_point' => 19, 
    			'ranking_subject' => 'The Times Radiography', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Law', 
    			'ranking_point' => 22, 
    			'ranking_subject' => 'Guardian Law', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//@TODO: Goldsmiths, University of London
    	$university_name = 'Goldsmiths, University of London';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {

    	}

    	//Heriot-Watt University
    	$university_name = 'Heriot-Watt University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Surveying & Planning', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'Guardian Building and town and country planning', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Economics', 
    			'ranking_point' => 3, 
    			'ranking_subject' => 'Guardian Economics', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Accounting & Finance', 
    			'ranking_point' => 8, 
    			'ranking_subject' => 'Guardian Accounting & finance', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Chemical Engineering', 
    			'ranking_point' => 8, 
    			'ranking_subject' => 'The Times Chemical Engineering', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Business Studies', 
    			'ranking_point' => 9, 
    			'ranking_subject' => 'Guardian Business, management & marketing', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 11, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Civil Engineering', 
    			'ranking_point' => 12, 
    			'ranking_subject' => 'QS CiviI & Structural Engineering', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Chemistry', 
    			'ranking_point' => 13, 
    			'ranking_subject' => 'The Times Chemistry', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//@TODO: Istituto Marangoni
    	$university_name = 'Istituto Marangoni';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    	}

    	//Kingston University
    	$university_name = 'Kingston University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Media & Communications', 
    			'ranking_point' => 4, 
    			'ranking_subject' => 'Guardian Journalism, publishing & public relations', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 6, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 6, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Nursing & Health Science', 
    			'ranking_point' => 9, 
    			'ranking_subject' => 'The Times Subjects allied to medicine', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Sports Science', 
    			'ranking_point' => 10, 
    			'ranking_subject' => 'Guardian Sports science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Pharmacology & Pharmacy', 
    			'ranking_point' => 20, 
    			'ranking_subject' => 'Guardian Pharmacy & pharmacology', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Food Science', 
    			'ranking_point' => 23, 
    			'ranking_subject' => 'The Times Food Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Lancaster University
    	$university_name = 'Lancaster University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 1, 
    			'ranking_subject' => 'The Times Drama, Dance and Cinematics', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Social Work & Policy', 
    			'ranking_point' => 1, 
    			'ranking_subject' => 'The Times Social Work', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Accounting & Finance', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'The Times Accounting and Finance', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Languages', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'The Times French', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'English and Literature', 
    			'ranking_point' => 4, 
    			'ranking_subject' => 'The Times Communication and Media Studies', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Media & Communications', 
    			'ranking_point' => 4, 
    			'ranking_subject' => 'The Times Communication and Media Studies', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Business Studies', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'The Times Business Studies', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Linguistics', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'QS Linguistics', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Leeds College of Art
    	$university_name = 'Leeds College of Art';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 51, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Loughborough University
    	$university_name = 'Loughborough University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Media & Communications', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'The Times Communication and Media Studies', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Surveying & Planning', 
    			'ranking_point' => 2, 
    			'ranking_subject' => 'The Times Building', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Accounting & Finance', 
    			'ranking_point' => 4, 
    			'ranking_subject' => 'The Times Accounting and Finance', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Psychology', 
    			'ranking_point' => 4, 
    			'ranking_subject' => 'The Times Psychology', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Product Design', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Sociology', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'The Times Sociology', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 5, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Middlesex University
    	$university_name = 'Middlesex University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Social Work & Policy', 
    			'ranking_point' => 7, 
    			'ranking_subject' => 'CUG Social Work', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Sports Science', 
    			'ranking_point' => 18, 
    			'ranking_subject' => 'CUG Sports Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 26, 
    			'ranking_subject' => 'CUG Drama, Dance & Cinematics', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Product Design', 
    			'ranking_point' => 31, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 31, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Northumbria University
    	$university_name = 'Northumbria University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Nursing & Health Science', 
    			'ranking_point' => 14, 
    			'ranking_subject' => 'The Times Physiotherapy', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Education', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'The Times Education', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Surveying & Planning', 
    			'ranking_point' => 19, 
    			'ranking_subject' => 'The Times Building', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Architecture', 
    			'ranking_point' => 20, 
    			'ranking_subject' => 'The Times Architecture', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Criminology', 
    			'ranking_point' => 20, 
    			'ranking_subject' => 'The Times Criminology', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 20, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Product Design', 
    			'ranking_point' => 20, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 20, 
    			'ranking_subject' => 'The Times Art and Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Norwich University of the Arts
    	$university_name = 'Norwich University of the Arts';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 35, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Architecture', 
    			'ranking_point' => 52, 
    			'ranking_subject' => 'CUG Architecture', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

    	//Nottingham Trent University
    	$university_name = 'Nottingham Trent University';
    	$university = University::where('name', '=', $university_name)->first();
    	if($university) {
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Agriculture & Forestry', 
    			'ranking_point' => 7, 
    			'ranking_subject' => 'CUG Agriculture & Forestry', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Food Science', 
    			'ranking_point' => 8, 
    			'ranking_subject' => 'CUG Food Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Area Studies', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'CUG East & South Asian Studies', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    			
    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Performing Arts', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Product Design', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Visual Arts', 
    			'ranking_point' => 15, 
    			'ranking_subject' => 'CUG Art & Design', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Surveying & Planning', 
    			'ranking_point' => 17, 
    			'ranking_subject' => 'CUG Building', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    		DB::table('university_ranking')->insert([
    			'university_id' => $university->id, 
    			'ranking_title' => 'Sports Science', 
    			'ranking_point' => 21, 
    			'ranking_subject' => 'CUG Sports Science', 
    			'country_slug' => 'UK',
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);
    	}

        //Plymouth University
        $university_name = 'Plymouth University';
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Food Science', 
                'ranking_point' => 12, 
                'ranking_subject' => 'The Times Food Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Dentistry', 
                'ranking_point' => 14, 
                'ranking_subject' => 'The Times Dentistry', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 14, 
                'ranking_subject' => 'Guardian Medicine', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Criminology', 
                'ranking_point' => 21, 
                'ranking_subject' => 'The Times Criminology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Environmental Science', 
                'ranking_point' => 25, 
                'ranking_subject' => 'QS Environmental Sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //Queen Margaret University
        $university_name = 'Queen Margaret University';
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 11, 
                'ranking_subject' => 'CUG Physiotherapy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Speech Therapy', 
                'ranking_point' => 20, 
                'ranking_subject' => 'CUG Aural & Oral Sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Food Science', 
                'ranking_point' => 28, 
                'ranking_subject' => 'CUG Food Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Pharmacology & Pharmacy', 
                'ranking_point' => 39, 
                'ranking_subject' => 'CUG Pharmacology & Pharmacy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //Queen's University Belfast
        /* Special char "'" */
        $university_name = "Queen's University Belfast";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Area Studies', 
                'ranking_point' => 2, 
                'ranking_subject' => 'The Times Celtic studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Dentistry', 
                'ranking_point' => 2, 
                'ranking_subject' => 'The Times Dentistry', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Pharmacology & Pharmacy', 
                'ranking_point' => 2, 
                'ranking_subject' => 'The Times Pharmacology and Pharmacy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Accounting & Finance', 
                'ranking_point' => 4, 
                'ranking_subject' => 'The Times Accounting and Finance', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Agriculture & Forestry', 
                'ranking_point' => 4, 
                'ranking_subject' => 'CUG Agriculture & Forestry', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'English and Literature', 
                'ranking_point' => 4, 
                'ranking_subject' => 'The Times Creative writing', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Architecture', 
                'ranking_point' => 14, 
                'ranking_subject' => 'The Times Architecture', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 20, 
                'ranking_subject' => 'The Times Medicine', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //Robert Gordon University
        $university_name = "Robert Gordon University";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Diagnostic Imaging', 
                'ranking_point' => 4, 
                'ranking_subject' => 'The Times Radiography', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 6, 
                'ranking_subject' => 'The Times Physiotherapy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Surveying & Planning', 
                'ranking_point' => 11, 
                'ranking_subject' => 'The Times Building', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Food Science', 
                'ranking_point' => 14, 
                'ranking_subject' => 'The Times Food Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sports Science', 
                'ranking_point' => 15, 
                'ranking_subject' => 'The Times Sport Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Social Work & Policy', 
                'ranking_point' => 16, 
                'ranking_subject' => 'The Times Social Work', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Pharmacology & Pharmacy', 
                'ranking_point' => 20, 
                'ranking_subject' => 'QS Pharmacy & Pharmacology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Architecture', 
                'ranking_point' => 22, 
                'ranking_subject' => 'The Times Architecture', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //Staffordshire University
        $university_name = "Staffordshire University";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Aeronautical Engineering', 
                'ranking_point' => 34, 
                'ranking_subject' => 'The Times Aeronautical and Manufacturing Engineering', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Manufacturing Engineering', 
                'ranking_point' => 34, 
                'ranking_subject' => 'The Times Aeronautical and Manufacturing Engineering', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Social Work & Policy', 
                'ranking_point' => 34, 
                'ranking_subject' => 'The Times Social Work', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sports Science', 
                'ranking_point' => 34, 
                'ranking_subject' => 'The Times Sport Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //Swansea University
        $university_name = "Swansea University";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Material Science', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Materials Technology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Materials Engineering', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Materials Technology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Area Studies', 
                'ranking_point' => 7, 
                'ranking_subject' => 'The Times Celtic studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sports Science', 
                'ranking_point' => 8, 
                'ranking_subject' => 'The Times Sport Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Criminology', 
                'ranking_point' => 9, 
                'ranking_subject' => 'The Times Criminology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 9, 
                'ranking_subject' => 'The Times Medicine', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Computer Science', 
                'ranking_point' => 12, 
                'ranking_subject' => 'The Times Computer Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Aeronautical Engineering', 
                'ranking_point' => 14, 
                'ranking_subject' => 'The Times Aeronautical and Manufacturing Engineering', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //The University of Liverpool
        $university_name = "The University of Liverpool";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Veterinary Science', 
                'ranking_point' => 3, 
                'ranking_subject' => 'QS Veterinary Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Area Studies', 
                'ranking_point' => 4, 
                'ranking_subject' => 'CUG Celtic Studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 4, 
                'ranking_subject' => 'The Times Physiotherapy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Chemistry', 
                'ranking_point' => 7, 
                'ranking_subject' => 'The Times Chemistry', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Diagnostic Imaging', 
                'ranking_point' => 8, 
                'ranking_subject' => 'The Times Radiography', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Architecture', 
                'ranking_point' => 9, 
                'ranking_subject' => 'The Times Architecture', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Dentistry', 
                'ranking_point' => 9, 
                'ranking_subject' => 'Times Clinical, Pre-clinical & Health', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 9, 
                'ranking_subject' => 'Times Clinical, Pre-clinical & Health United', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //The University of Sheffield
        $university_name = "The University of Sheffield";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Media & Communications', 
                'ranking_point' => 1, 
                'ranking_subject' => 'Guardian Journalism, publishing & public relations', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Architecture', 
                'ranking_point' => 3, 
                'ranking_subject' => 'The Times Architecture', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Archaeology', 
                'ranking_point' => 5, 
                'ranking_subject' => 'QS Archaeology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Biological Sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Civil Engineering', 
                'ranking_point' => 5, 
                'ranking_subject' => 'QS CiviI & Structural Engineering', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Dentistry', 
                'ranking_point' => 12, 
                'ranking_subject' => 'ARWU Clinical Medicine and Pharmacy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 12, 
                'ranking_subject' => 'ARWU Clinical Medicine and Pharmacy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Central Lancashire
        $university_name = "University of Central Lancashire";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Area Studies', 
                'ranking_point' => 12, 
                'ranking_subject' => 'The Times East and South Asian Studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Dentistry', 
                'ranking_point' => 15, 
                'ranking_subject' => 'The Times Dentistry', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Languages', 
                'ranking_point' => 20, 
                'ranking_subject' => 'The Times Italian', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Linguistics', 
                'ranking_point' => 22, 
                'ranking_subject' => 'The Times Linguistics', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Food Science', 
                'ranking_point' => 23, 
                'ranking_subject' => 'CUG Food Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Hospitality & Tourism', 
                'ranking_point' => 24, 
                'ranking_subject' => 'The Times Hospitality, Leisure, Recreation and Tourism', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Archaeology', 
                'ranking_point' => 25, 
                'ranking_subject' => 'CUG Archaeology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Social Work & Policy', 
                'ranking_point' => 25, 
                'ranking_subject' => 'The Times Social Policy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Derby
        $university_name = "University of Derby";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Diagnostic Imaging', 
                'ranking_point' => 14, 
                'ranking_subject' => 'The Times Radiography', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Surveying & Planning', 
                'ranking_point' => 15, 
                'ranking_subject' => 'The Times Building', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Area Studies', 
                'ranking_point' => 20, 
                'ranking_subject' => 'The Times American Studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Criminology', 
                'ranking_point' => 24, 
                'ranking_subject' => 'The Times Criminology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Dundee
        $university_name = "University of Dundee";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Dentistry', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Dentistry', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Civil Engineering', 
                'ranking_point' => 6, 
                'ranking_subject' => 'The Times Civil Engineering', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Education', 
                'ranking_point' => 6, 
                'ranking_subject' => 'The Times Education', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Mathematics', 
                'ranking_point' => 7, 
                'ranking_subject' => 'The Times Mathematics', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 8, 
                'ranking_subject' => 'Times Life sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => ' Pharmacology & Pharmacy', 
                'ranking_point' => 8, 
                'ranking_subject' => 'Times Life sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 12, 
                'ranking_subject' => 'Times Clinical, Pre-clinical & Health', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Architecture', 
                'ranking_point' => 13, 
                'ranking_subject' => 'The Times Architecture', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of East Anglia
        $university_name = "University of East Anglia";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Area Studies', 
                'ranking_point' => 2, 
                'ranking_subject' => 'Guardian American studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 2, 
                'ranking_subject' => 'The Times Physiotherapy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 4, 
                'ranking_subject' => 'CUG Anatomy & Physiology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Social Work & Policy', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Social Work', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Accounting & Finance', 
                'ranking_point' => 6, 
                'ranking_subject' => 'Guardian Accounting & finance', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Speech Therapy', 
                'ranking_point' => 6, 
                'ranking_subject' => 'CUG Aural & Oral Sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Law', 
                'ranking_point' => 7, 
                'ranking_subject' => 'Guardian Law', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Pharmacology & Pharmacy', 
                'ranking_point' => 14, 
                'ranking_subject' => 'Times Life sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Essex
        $university_name = "University of Essex";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sociology', 
                'ranking_point' => 6, 
                'ranking_subject' => 'QS Sociology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Criminology', 
                'ranking_point' => 7, 
                'ranking_subject' => 'The Times Criminology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Politics', 
                'ranking_point' => 7, 
                'ranking_subject' => 'The Times Politics', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Performing Arts', 
                'ranking_point' => 8, 
                'ranking_subject' => 'The Times Drama, Dance and Cinematics', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Economics', 
                'ranking_point' => 10, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Education', 
                'ranking_point' => 10, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'History', 
                'ranking_point' => 10, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Linguistics', 
                'ranking_point' => 10, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Exeter
        $university_name = "University of Exeter";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Diagnostic Imaging', 
                'ranking_point' => 2, 
                'ranking_subject' => 'The Times Radiography', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sociology', 
                'ranking_point' => 2, 
                'ranking_subject' => 'The Times Sociology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sports Science', 
                'ranking_point' => 2, 
                'ranking_subject' => 'The Times Sociology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Performing Arts', 
                'ranking_point' => 3, 
                'ranking_subject' => 'The Times Drama, Dance and Cinematics', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Area Studies', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Middle Eastern and African Studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Environmental Science', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Geography and Environmental Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Geography', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Geography and Environmental Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Materials Engineering', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Materials Technology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Greenwich
        $university_name = "University of Greenwich";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Agriculture & Forestry', 
                'ranking_point' => 15, 
                'ranking_subject' => 'The Times Agriculture and Forestry', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Food Science', 
                'ranking_point' => 16, 
                'ranking_subject' => 'The Times Food Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Hospitality & Tourism', 
                'ranking_point' => 18, 
                'ranking_subject' => 'The Times Hospitality, Leisure, Recreation and Tourism', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Surveying & Planning', 
                'ranking_point' => 27, 
                'ranking_subject' => 'The Times Town and Country Planning and Landscape', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Kent
        $university_name = "University of Kent";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Criminology', 
                'ranking_point' => 2, 
                'ranking_subject' => 'The Times Criminology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Social Work & Policy', 
                'ranking_point' => 4, 
                'ranking_subject' => 'The Times Social Work', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Performing Arts', 
                'ranking_point' => 6, 
                'ranking_subject' => 'The Times Art and Design', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Visual Arts', 
                'ranking_point' => 6, 
                'ranking_subject' => 'The Times Art and Design', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sociology', 
                'ranking_point' => 7, 
                'ranking_subject' => 'The Times Sociology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Psychology', 
                'ranking_point' => 9, 
                'ranking_subject' => 'The Times Psychology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Media & Communications', 
                'ranking_point' => 10, 
                'ranking_subject' => 'The Times Communication and Media Studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Architecture', 
                'ranking_point' => 11, 
                'ranking_subject' => 'The Times Architecture', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Lincoln
        $university_name = "University of Lincoln";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Hospitality & Tourism', 
                'ranking_point' => 5, 
                'ranking_subject' => 'The Times Hospitality, Leisure, Recreation and Tourism', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Criminology', 
                'ranking_point' => 16, 
                'ranking_subject' => 'The Times Criminology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Architecture', 
                'ranking_point' => 18, 
                'ranking_subject' => 'The Times Architecture', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Performing Arts', 
                'ranking_point' => 18, 
                'ranking_subject' => 'The Times Art and Design', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Product Design', 
                'ranking_point' => 18, 
                'ranking_subject' => 'The Times Art and Design', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Visual Arts', 
                'ranking_point' => 18, 
                'ranking_subject' => 'The Times Art and Design', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sports Science', 
                'ranking_point' => 19, 
                'ranking_subject' => 'The Times Sport Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Social Work & Policy', 
                'ranking_point' => 22, 
                'ranking_subject' => 'CUG Social Work', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Strathclyde
        $university_name = "University of Strathclyde";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Speech Therapy', 
                'ranking_point' => 1, 
                'ranking_subject' => 'CUG Aural & Oral Sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Accounting & Finance', 
                'ranking_point' => 2, 
                'ranking_subject' => 'CUG Accounting & Finance', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Hospitality & Tourism', 
                'ranking_point' => 2, 
                'ranking_subject' => 'CUG Hospitality, Leisure, Recreation & Tourism', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Media & Communications', 
                'ranking_point' => 2, 
                'ranking_subject' => 'CUG Communication & Media Studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Pharmacology & Pharmacy', 
                'ranking_point' => 2, 
                'ranking_subject' => 'CUG Pharmacology & Pharmacy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Social Work & Policy', 
                'ranking_point' => 2, 
                'ranking_subject' => 'CUG Social Policy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Business Studies', 
                'ranking_point' => 4, 
                'ranking_subject' => 'CUG Marketing', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Architecture', 
                'ranking_point' => 8, 
                'ranking_subject' => 'CUG Architecture', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Sunderland
        $university_name = "University of Sunderland";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Hospitality & Tourism', 
                'ranking_point' => 20, 
                'ranking_subject' => 'The Times Hospitality, Leisure, Recreation and Tourism', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 23, 
                'ranking_subject' => 'The Times Subjects allied to medicine', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Mechanical Engineering', 
                'ranking_point' => 26, 
                'ranking_subject' => 'The Times Mechanical Engineering', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Pharmacology & Pharmacy', 
                'ranking_point' => 36, 
                'ranking_subject' => 'CUG Pharmacology & Pharmacy', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Surrey
        $university_name = "University of Surrey";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Food Science', 
                'ranking_point' => 1, 
                'ranking_subject' => 'The Times Food Science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Hospitality & Tourism', 
                'ranking_point' => 1, 
                'ranking_subject' => 'CUG Hospitality, Leisure, Recreation & Tourism', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Music', 
                'ranking_point' => 2, 
                'ranking_subject' => 'Guardian Music', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Performing Arts', 
                'ranking_point' => 2, 
                'ranking_subject' => 'Guardian Drama & dance', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Material Science', 
                'ranking_point' => 3, 
                'ranking_subject' => 'CUG Materials Technology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 3, 
                'ranking_subject' => 'CUG Nursing', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Electrical Engineering', 
                'ranking_point' => 4, 
                'ranking_subject' => 'Guardian Engineering: electronic & electrical', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Veterinary Science', 
                'ranking_point' => 6, 
                'ranking_subject' => 'Guardian Veterinary science', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Sussex
        $university_name = "University of Sussex";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sociology', 
                'ranking_point' => 1, 
                'ranking_subject' => 'QS Development Studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Area Studies', 
                'ranking_point' => 3, 
                'ranking_subject' => 'CUG American Studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Performing Arts', 
                'ranking_point' => 4, 
                'ranking_subject' => 'The Times Drama, Dance and Cinematics', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 6, 
                'ranking_subject' => 'The Times Anatomy and Physiology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Business Studies', 
                'ranking_point' => 7, 
                'ranking_subject' => 'CUG Marketing', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Criminology', 
                'ranking_point' => 8, 
                'ranking_subject' => 'Times Social sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Economics', 
                'ranking_point' => 8, 
                'ranking_subject' => 'Times Social sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Education', 
                'ranking_point' => 8, 
                'ranking_subject' => 'Times Social sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Winchester
        $university_name = "University of Winchester";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Area Studies', 
                'ranking_point' => 3, 
                'ranking_subject' => 'The Times American Studies', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Music', 
                'ranking_point' => 3, 
                'ranking_subject' => 'The Times Music', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Criminology', 
                'ranking_point' => 4, 
                'ranking_subject' => 'The Times Criminology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Film & Sound Technology', 
                'ranking_point' => 4, 
                'ranking_subject' => 'Times Engineering & Technology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Multimedia Technology', 
                'ranking_point' => 4, 
                'ranking_subject' => 'Times Engineering & Technology', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Economics', 
                'ranking_point' => 7, 
                'ranking_subject' => 'Times Social sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Education', 
                'ranking_point' => 7, 
                'ranking_subject' => 'Times Social sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Geography', 
                'ranking_point' => 7, 
                'ranking_subject' => 'Times Social sciences', 
                'country_slug' => 'UK',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }
        /*Australia*/
        //Griffith University
        $university_name = "Griffith University";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Social Work & Policy', 
                'ranking_point' => 5, 
                'ranking_subject' => 'QS Social Policy', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Education', 
                'ranking_point' => 6, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'History', 
                'ranking_point' => 6, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Linguistics', 
                'ranking_point' => 6, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Media & Communications', 
                'ranking_point' => 6, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Psychology', 
                'ranking_point' => 6, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sociology', 
                'ranking_point' => 6, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //La Trobe University
        $university_name = "La Trobe University";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Archaeology', 
                'ranking_point' => 4, 
                'ranking_subject' => 'QS Archaeology', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'History', 
                'ranking_point' => 5, 
                'ranking_subject' => 'QS History', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sociology', 
                'ranking_point' => 6, 
                'ranking_subject' => 'QS Sociology', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Linguistics', 
                'ranking_point' => 8, 
                'ranking_subject' => 'QS Linguistics', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Philosophy', 
                'ranking_point' => 9, 
                'ranking_subject' => 'QS Philosophy', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Agriculture & Forestry', 
                'ranking_point' => 10, 
                'ranking_subject' => 'QS Agriculture & Forestry', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 10, 
                'ranking_subject' => 'QS Biological Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 13, 
                'ranking_subject' => 'QS Nursing', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //Monash University
        $university_name = "Monash University";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Civil Engineering', 
                'ranking_point' => 1, 
                'ranking_subject' => 'Times Engineering & Technology', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Materials Engineering', 
                'ranking_point' => 1, 
                'ranking_subject' => 'Times Engineering & Technology', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Pharmacology & Pharmacy', 
                'ranking_point' => 1, 
                'ranking_subject' => 'QS Pharmacy & Pharmacology', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 2, 
                'ranking_subject' => 'QS Nursing', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Diagnostic Imaging', 
                'ranking_point' => 3, 
                'ranking_subject' => 'Times Clinical, Pre-clinical & Health', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 3, 
                'ranking_subject' => 'ARWU Clinical Medicine and Pharmacy', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Law', 
                'ranking_point' => 5, 
                'ranking_subject' => 'QS Law', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Food Science', 
                'ranking_point' => 6, 
                'ranking_subject' => 'ARWU Life and Agriculture Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //Queensland University of Technology
        $university_name = "Queensland University of Technology";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Computer Science', 
                'ranking_point' => 4, 
                'ranking_subject' => 'Times Computer Science', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Civil Engineering', 
                'ranking_point' => 6, 
                'ranking_subject' => 'QS CiviI & Structural Engineering', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Aeronautical Engineering', 
                'ranking_point' => 7, 
                'ranking_subject' => 'QS Mechanical, Aeronautical & Manufacturing Engineering', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Mathematics', 
                'ranking_point' => 7, 
                'ranking_subject' => 'QS Mathematics', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Mechanical Engineering', 
                'ranking_point' => 7, 
                'ranking_subject' => 'QS Mechanical, Aeronautical & Manufacturing Engineering', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 8, 
                'ranking_subject' => 'QS Nursing', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Accounting & Finance', 
                'ranking_point' => 9, 
                'ranking_subject' => 'QS Accounting & Finance', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Architecture', 
                'ranking_point' => 10, 
                'ranking_subject' => 'QS Architecture', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Tasmania
        $university_name = "University of Tasmania";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Agriculture & Forestry', 
                'ranking_point' => 8, 
                'ranking_subject' => 'QS Agriculture & Forestry', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Philosophy', 
                'ranking_point' => 10, 
                'ranking_subject' => 'QS Philosophy', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Marine Science', 
                'ranking_point' => 12, 
                'ranking_subject' => 'QS Earth & Marine Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 12, 
                'ranking_subject' => 'QS Medicine', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 16, 
                'ranking_subject' => 'QS Biological Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Environmental Science', 
                'ranking_point' => 16, 
                'ranking_subject' => 'QS Environmental Sciences', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sociology', 
                'ranking_point' => 16, 
                'ranking_subject' => 'QS Sociology', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Geography', 
                'ranking_point' => 17, 
                'ranking_subject' => 'QS Geography', 
                'country_slug' => 'AU',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        /*United States*/
        //American University
        $university_name = "American University";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sociology', 
                'ranking_point' => 11, 
                'ranking_subject' => 'QS Development Studies', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Law', 
                'ranking_point' => 14, 
                'ranking_subject' => 'QS Law', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Accounting & Finance', 
                'ranking_point' => 39, 
                'ranking_subject' => 'QS Accounting & Finance', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
                
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Economics', 
                'ranking_point' => 47, 
                'ranking_subject' => 'QS Economics', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //Auburn University
        $university_name = "Auburn University";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Agriculture & Forestry', 
                'ranking_point' => 37, 
                'ranking_subject' => 'QS Agriculture & Forestry', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Business Studies', 
                'ranking_point' => 81, 
                'ranking_subject' => 'ARWU Economics/Business', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Economics', 
                'ranking_point' => 81, 
                'ranking_subject' => 'ARWU Economics/Business', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //Louisiana State University
        $university_name = "Louisiana State University";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Environmental Science', 
                'ranking_point' => 65, 
                'ranking_subject' => 'QS Environmental Sciences', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 91, 
                'ranking_subject' => 'QS Biological Sciences', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Central Florida
        $university_name = "University of Central Florida";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Physics', 
                'ranking_point' => 73, 
                'ranking_subject' => 'QS Physics & Astronomy', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Education', 
                'ranking_point' => 75, 
                'ranking_subject' => 'QS Education', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Computer Science', 
                'ranking_point' => 81, 
                'ranking_subject' => 'QS Computer Science', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Business Studies', 
                'ranking_point' => 88, 
                'ranking_subject' => 'ARWU Economics/Business', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Economics', 
                'ranking_point' => 88, 
                'ranking_subject' => 'ARWU Economics/Business', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Illinois - Chicago
        $university_name = "University of Illinois - Chicago";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Accounting & Finance', 
                'ranking_point' => 4, 
                'ranking_subject' => 'QS Accounting & Finance', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Sociology', 
                'ranking_point' => 5, 
                'ranking_subject' => 'QS Sociology', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Economics', 
                'ranking_point' => 6, 
                'ranking_subject' => 'QS Economics', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'English Literature', 
                'ranking_point' => 6, 
                'ranking_subject' => 'QS English Language & Literature', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Archaeology', 
                'ranking_point' => 7, 
                'ranking_subject' => 'QS Archaeology', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'History', 
                'ranking_point' => 7, 
                'ranking_subject' => 'QS History', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Law', 
                'ranking_point' => 7, 
                'ranking_subject' => 'QS Law', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Physics', 
                'ranking_point' => 7, 
                'ranking_subject' => 'QS Physics', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Kansas
        $university_name = "University of Kansas";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Languages', 
                'ranking_point' => 46, 
                'ranking_subject' => 'QS Modern Languages', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Psychology', 
                'ranking_point' => 46, 
                'ranking_subject' => 'QS Psychology', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Mathematics', 
                'ranking_point' => 55, 
                'ranking_subject' => 'ARWU Mathematics', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Enviromental Science', 
                'ranking_point' => 59, 
                'ranking_subject' => 'QS Environmental Sciences', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of South Carolina
        $university_name = "University of South Carolina";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Mathematics', 
                'ranking_point' => 66, 
                'ranking_subject' => 'QS Mathematics', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'English and Literature', 
                'ranking_point' => 73, 
                'ranking_subject' => 'QS English Language & Literature', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Chemistry', 
                'ranking_point' => 80, 
                'ranking_subject' => 'QS Chemistry', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Education', 
                'ranking_point' => 85, 
                'ranking_subject' => 'QS Education', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University of Vermont
        $university_name = "University of Vermont";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Agriculture & Forestry', 
                'ranking_point' => 42, 
                'ranking_subject' => 'QS Agriculture & Forestry', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 109, 
                'ranking_subject' => 'QS Biological Sciences', 
                'country_slug' => 'US',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        /*Canada*/
        //University of Manitoba
        $university_name = "University of Manitoba";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Pharmacology & Pharmacy', 
                'ranking_point' => 7, 
                'ranking_subject' => 'QS Pharmacy & Pharmacology', 
                'country_slug' => 'CA',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Agriculture & Forestry', 
                'ranking_point' => 8, 
                'ranking_subject' => 'QS Agriculture & Forestry', 
                'country_slug' => 'CA',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Education', 
                'ranking_point' => 15, 
                'ranking_subject' => 'QS Education', 
                'country_slug' => 'CA',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 17, 
                'ranking_subject' => 'QS Biological Sciences', 
                'country_slug' => 'CA',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'English and Literature', 
                'ranking_point' => 17, 
                'ranking_subject' => 'QS English Language & Literature', 
                'country_slug' => 'CA',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        /*Ireland*/
        //University College Dublin
        $university_name = "University College Dublin";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Agriculture & Forestry', 
                'ranking_point' => 1, 
                'ranking_subject' => 'ARWU Life and Agriculture Sciences', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Archaeology', 
                'ranking_point' => 1, 
                'ranking_subject' => 'QS Archaeology', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 1, 
                'ranking_subject' => 'ARWU Life and Agriculture Sciences', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Business Studies', 
                'ranking_point' => 1, 
                'ranking_subject' => 'ARWU Economics/Business', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Economics', 
                'ranking_point' => 1, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Veterinary Science', 
                'ranking_point' => 1, 
                'ranking_subject' => 'QS Veterinary Science', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 3, 
                'ranking_subject' => 'QS Medicine', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 3, 
                'ranking_subject' => 'QS Nursing', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }

        //University College Dublin
        $university_name = "University College Dublin";
        $university = University::where('name', '=', $university_name)->first();
        if($university) {
            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Agriculture & Forestry', 
                'ranking_point' => 1, 
                'ranking_subject' => 'ARWU Life and Agriculture Sciences', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Archaeology', 
                'ranking_point' => 1, 
                'ranking_subject' => 'QS Archaeology', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Biological Science', 
                'ranking_point' => 1, 
                'ranking_subject' => 'ARWU Life and Agriculture Sciences', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Business Studies', 
                'ranking_point' => 1, 
                'ranking_subject' => 'ARWU Economics/Business', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Economics', 
                'ranking_point' => 1, 
                'ranking_subject' => 'ARWU Social Sciences', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Veterinary Science', 
                'ranking_point' => 1, 
                'ranking_subject' => 'QS Veterinary Science', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Medicine', 
                'ranking_point' => 3, 
                'ranking_subject' => 'QS Medicine', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);

            DB::table('university_ranking')->insert([
                'university_id' => $university->id, 
                'ranking_title' => 'Nursing & Health Science', 
                'ranking_point' => 3, 
                'ranking_subject' => 'QS Nursing', 
                'country_slug' => 'IL',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
                ]);
        }
   }
}
