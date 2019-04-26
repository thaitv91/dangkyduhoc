<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\University;

class UniversityStatisticSeeder extends Seeder
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
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1966,
    			'student_population' => 15000, 
    			'staff_population' => 681, 
    			'male_number' => 52, 
    			'female_number' => 48,
    			'international_students' => 32,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Bangor University
    	$university_name = 'Bangor University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1884,
    			'student_population' => 9162, 
    			'staff_population' => 355, 
    			'male_number' => 43, 
    			'female_number' => 57,
    			'international_students' => 21,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Bath Spa University
    	$university_name = 'Bath Spa University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	2005,
    			'student_population' => 6214, 
    			'staff_population' => 200, 
    			'male_number' => 33, 
    			'female_number' => 67,
    			'international_students' => 5,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Birmingham City University
    	$university_name = 'Birmingham City University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1992,
    			'student_population' => 24065, 
    			'staff_population' => 1183, 
    			'male_number' => 39, 
    			'female_number' => 61,
    			'international_students' => 20,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Brunel University London
    	$university_name = 'Brunel University London';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1966,
    			'student_population' => 11646, 
    			'staff_population' => 705, 
    			'male_number' => 54, 
    			'female_number' => 46,
    			'international_students' => 39,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Coventry University
    	$university_name = 'Coventry University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1992,
    			'student_population' => 21285, 
    			'staff_population' => 1447, 
    			'male_number' => 52, 
    			'female_number' => 48,
    			'international_students' => 41,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Durham University
    	$university_name = 'Durham University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1832,
    			'student_population' => 15705, 
    			'staff_population' => 1013, 
    			'male_number' => 48, 
    			'female_number' => 52,
    			'international_students' => 26,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Falmouth University
    	$university_name = 'Falmouth University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1902,
    			'student_population' => 3775, 
    			'staff_population' => 120, 
    			'male_number' => 41, 
    			'female_number' => 59,
    			'international_students' => 7,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Glasgow Caledonian University
    	$university_name = 'Glasgow Caledonian University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1993,
    			'student_population' => 13733, 
    			'staff_population' => 850, 
    			'male_number' => 41, 
    			'female_number' => 59,
    			'international_students' => 18,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Goldsmiths, University of London
    	$university_name = 'Goldsmiths, University of London';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1904,
    			'student_population' => 7257, 
    			'staff_population' => 450, 
    			'male_number' => 33, 
    			'female_number' => 67,
    			'international_students' => 38,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Heriot-Watt University
    	$university_name = 'Heriot-Watt University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1966,
    			'student_population' => 9289, 
    			'staff_population' => 546, 
    			'male_number' => 59, 
    			'female_number' => 41,
    			'international_students' => 42,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// // Istituto Marangoni
    	// $university_name = 'Istituto Marangoni';
    	// $university = University::where('name', '=', $university_name)->first(); if($university)

    	// DB::table('university_statistic')->insert([
    	// 	'university_id' => $university->id,
    	// 	'year_founded'	=>	1935,
    	// 	'student_population' => 671, 
    	// 	'staff_population' => , 
    	// 	'male_number' => 8, 
    	// 	'female_number' => 92,
    	// 	'international_students' => 42,
    	// 	'created_at' 	=> Carbon::now(),
    	// 	'updated_at' 	=> Carbon::now()
    	// 	]);

    	// Kingston University
    	$university_name = 'Kingston University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1992,
    			'student_population' => 18254, 
    			'staff_population' => 829, 
    			'male_number' => 45, 
    			'female_number' => 55,
    			'international_students' => 35,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Lancaster University
    	$university_name = 'Lancaster University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1964,
    			'student_population' => 11673, 
    			'staff_population' => 845, 
    			'male_number' => 48, 
    			'female_number' => 52,
    			'international_students' => 35,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Leeds College of Art
    	$university_name = 'Leeds College of Art';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1846,
    			'student_population' => 1071, 
    			'staff_population' => 106, 
    			'male_number' => 31, 
    			'female_number' => 69,
    			'international_students' => 5,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Loughborough University
    	$university_name = 'Loughborough University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1909,
    			'student_population' => 13677, 
    			'staff_population' => 924, 
    			'male_number' => 62, 
    			'female_number' => 38,
    			'international_students' => 22,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Middlesex University
    	$university_name = 'Middlesex University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1992,
    			'student_population' => 16033, 
    			'staff_population' => 785, 
    			'male_number' => 40, 
    			'female_number' => 60,
    			'international_students' => 44,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Northumbria University
    	$university_name = 'Northumbria University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1969,
    			'student_population' => 22445, 
    			'staff_population' => 1219, 
    			'male_number' => 45, 
    			'female_number' => 55,
    			'international_students' => 16,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Norwich University of the Arts
    	$university_name = 'Norwich University of the Arts';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1845,
    			'student_population' => 1686, 
    			'staff_population' => 97, 
    			'male_number' => 41, 
    			'female_number' => 59,
    			'international_students' => 7,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Nottingham Trent University
    	$university_name = 'Nottingham Trent University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1992,
    			'student_population' => 21932, 
    			'staff_population' => 1290, 
    			'male_number' => 45, 
    			'female_number' => 55,
    			'international_students' => 18,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Plymouth University
    	$university_name = 'Plymouth University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1992,
    			'student_population' => 18508, 
    			'staff_population' => 950, 
    			'male_number' => 48, 
    			'female_number' => 52,
    			'international_students' => 14,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Queen Margaret University
    	$university_name = 'Queen Margaret University';
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	2007,
    			'student_population' => 3743, 
    			'staff_population' => 174, 
    			'male_number' => 23, 
    			'female_number' => 77,
    			'international_students' => 28,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Queen's University Belfast
    	$university_name = "Queen's University Belfast";
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1845,
    			'student_population' => 17348, 
    			'staff_population' => 1084, 
    			'male_number' => 45, 
    			'female_number' => 55,
    			'international_students' => 32,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Robert Gordon University
    	$university_name = "Robert Gordon University";
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1992,
    			'student_population' => 9628, 
    			'staff_population' => 496, 
    			'male_number' => 40, 
    			'female_number' => 60,
    			'international_students' => 23,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Staffordshire University
    	$university_name = "Staffordshire University";
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1992,
    			'student_population' => 14351, 
    			'staff_population' => 644, 
    			'male_number' => 52, 
    			'female_number' => 48,
    			'international_students' => 13,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Swansea University
    	$university_name = "Swansea University";
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1920,
    			'student_population' => 13048, 
    			'staff_population' => 786, 
    			'male_number' => 52, 
    			'female_number' => 48,
    			'international_students' => 21,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// The University of Liverpool
    	$university_name = "The University of Liverpool";
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1882,
    			'student_population' => 19085, 
    			'staff_population' => 1590, 
    			'male_number' => 47, 
    			'female_number' => 53,
    			'international_students' => 34,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// The University of Sheffield
    	$university_name = "The University of Sheffield";
    	$university = University::where('name', '=', $university_name)->first(); 
    	if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1905,
    			'student_population' => 23961, 
    			'staff_population' => 1566, 
    			'male_number' => 50, 
    			'female_number' => 50,
    			'international_students' => 33,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// University College Birmingham
    	/*$university_name = "University College Birmingham";
    	$university = University::where('name', '=', $university_name)->first(); if($university)

    	DB::table('university_statistic')->insert([
    		'university_id' => $university->id,
    		'year_founded'	=>	1905,
    		'student_population' => 23961, 
    		'staff_population' => 1566, 
    		'male_number' => 50, 
    		'female_number' => 50,
    		'international_students' => 33,
    		'created_at' 	=> Carbon::now(),
    		'updated_at' 	=> Carbon::now()
    		]);*/

    	// University of Central Lancashire
    		$university_name = "University of Central Lancashire";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1992,
    				'student_population' => 17703, 
    				'staff_population' => 1029, 
    				'male_number' => 43, 
    				'female_number' => 57,
    				'international_students' => 16,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Derby
    		$university_name = "University of Derby";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1992,
    				'student_population' => 12776, 
    				'staff_population' => 751, 
    				'male_number' => 45, 
    				'female_number' => 55,
    				'international_students' => 12,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Dundee
    		$university_name = "University of Dundee";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1967,
    				'student_population' => 11266, 
    				'staff_population' => 761, 
    				'male_number' => 39, 
    				'female_number' => 61,
    				'international_students' => 24,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of East Anglia
    		$university_name = "University of East Anglia";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1963,
    				'student_population' => 13997, 
    				'staff_population' => 1021, 
    				'male_number' => 42, 
    				'female_number' => 58,
    				'international_students' => 28,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Essex
    		$university_name = "University of Essex";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1963,
    				'student_population' => 10154, 
    				'staff_population' => 672, 
    				'male_number' => 46, 
    				'female_number' => 54,
    				'international_students' => 44,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Exeter
    		$university_name = "University of Exeter";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1955,
    				'student_population' => 18233, 
    				'staff_population' => 1047, 
    				'male_number' => 45, 
    				'female_number' => 55,
    				'international_students' => 27,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Greenwich
    		$university_name = "University of Greenwich";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1992,
    				'student_population' => 15209, 
    				'staff_population' => 775, 
    				'male_number' => 46, 
    				'female_number' => 54,
    				'international_students' => 34,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Kent
    		$university_name = "University of Kent";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1965,
    				'student_population' => 17080, 
    				'staff_population' => 1324, 
    				'male_number' => 48, 
    				'female_number' => 52,
    				'international_students' => 29,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Lincoln
    		$university_name = "University of Lincoln";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1861,
    				'student_population' => 10999, 
    				'staff_population' => 601, 
    				'male_number' => 44, 
    				'female_number' => 56,
    				'international_students' => 16,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Strathclyde
    		$university_name = "University of Strathclyde";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1796,
    				'student_population' => 15770, 
    				'staff_population' => 796, 
    				'male_number' => 51, 
    				'female_number' => 49,
    				'international_students' => 22,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Sunderland
    		$university_name = "University of Sunderland";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1992,
    				'student_population' => 12252, 
    				'staff_population' => 612, 
    				'male_number' => 48, 
    				'female_number' => 52,
    				'international_students' => 30,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Surrey
    		$university_name = "University of Surrey";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1891,
    				'student_population' => 10377, 
    				'staff_population' => 780, 
    				'male_number' => 46, 
    				'female_number' => 54,
    				'international_students' => 38,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Sussex
    		$university_name = "University of Surrey";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1961,
    				'student_population' => 12293, 
    				'staff_population' => 778, 
    				'male_number' => 45, 
    				'female_number' => 55,
    				'international_students' => 35,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Winchester
    		$university_name = "University of Winchester";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	2005,
    				'student_population' => 5470, 
    				'staff_population' => 327, 
    				'male_number' => 33, 
    				'female_number' => 67,
    				'international_students' => 9,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Griffith University
    		$university_name = "Griffith University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1971,
    				'student_population' => 31031, 
    				'staff_population' => 1391, 
    				'male_number' => 44, 
    				'female_number' => 56,
    				'international_students' => 20,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// La Trobe University
    		$university_name = "La Trobe University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1964,
    				'student_population' => 22422, 
    				'staff_population' => 757, 
    				'male_number' => 37, 
    				'female_number' => 63,
    				'international_students' => 25,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Monash University
    		$university_name = "Monash University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    		DB::table('university_statistic')->insert([
    			'university_id' => $university->id,
    			'year_founded'	=>	1958,
    			'student_population' => 44217, 
    			'staff_population' => 1281, 
    			'male_number' => 43, 
    			'female_number' => 57,
    			'international_students' => 25,
    			'created_at' 	=> Carbon::now(),
    			'updated_at' 	=> Carbon::now()
    			]);

    	// Queensland University of Technology
    		$university_name = "Queensland University of Technology";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1908,
    				'student_population' => 48837, 
    				'staff_population' => 2382, 
    				'male_number' => 46, 
    				'female_number' => 54,
    				'international_students' => 17,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Southern Cross University
    		$university_name = "Southern Cross University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1994,
    				'student_population' => 9143, 
    				'staff_population' => 258, 
    				'male_number' => 35, 
    				'female_number' => 65,
    				'international_students' => 15,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Tasmania
    		$university_name = "University of Tasmania";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1890,
    				'student_population' => 14838, 
    				'staff_population' => 753, 
    				'male_number' => 42, 
    				'female_number' => 58,
    				'international_students' => 18,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Adelphi University
    	/*$university_name = "Adelphi University";
    	$university = University::where('name', '=', $university_name)->first(); if($university)

    	DB::table('university_statistic')->insert([
    		'university_id' => $university->id,
    		'year_founded'	=>	1890,
    		'student_population' => 14838, 
    		'staff_population' => 753, 
    		'male_number' => 42, 
    		'female_number' => 58,
    		'international_students' => 18,
    		'created_at' 	=> Carbon::now(),
    		'updated_at' 	=> Carbon::now()
    		]);*/

    	// American University
    		$university_name = "American University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1893,
    				'student_population' => 12313, 
    				'staff_population' => 1026, 
    				'male_number' => 38, 
    				'female_number' => 62,
    				'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Auburn University
    		$university_name = "Auburn University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1856,
    				'student_population' => 27287, 
    				'staff_population' => 1323, 
    				'male_number' => 51, 
    				'female_number' => 49,
    				'international_students' => 7,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Florida International University
    		$university_name = "Florida International University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1965,
    				'student_population' => 33983, 
    				'staff_population' => 3303, 
    				'male_number' => 44, 
    				'female_number' => 56,
    				'international_students' => 7,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// James Madison University
    	/*$university_name = "James Madison University";
    	$university = University::where('name', '=', $university_name)->first(); if($university)

    	DB::table('university_statistic')->insert([
    		'university_id' => $university->id,
    		'year_founded'	=>	1965,
    		'student_population' => 33983, 
    		'staff_population' => 3303, 
    		'male_number' => 44, 
    		'female_number' => 56,
    		'international_students' => 7,
    		'created_at' 	=> Carbon::now(),
    		'updated_at' 	=> Carbon::now()
    		]);*/

    	// Louisiana State University
    		$university_name = "Louisiana State University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1860,
    				'student_population' => 28541, 
    				'staff_population' => 1427, 
    				'male_number' => 48, 
    				'female_number' => 52,
    				'international_students' => 6,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Roosevelt University
    		$university_name = "Roosevelt University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1945,
    				'student_population' => 6600, 
    				'staff_population' => 550, 
    				'male_number' => 40, 
    				'female_number' => 60,
    				'international_students' => 5,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Illinois - Chicago
    		$university_name = "University of Illinois - Chicago";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1965,
    				'student_population' => 24459, 
    				'staff_population' => 2108, 
    				'male_number' => 47, 
    				'female_number' => 53,
    				'international_students' => 18,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Kansas
    		$university_name = "University of Kansas";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1854,
    				'student_population' => 24345, 
    				'staff_population' => 3203, 
    				'male_number' => 49, 
    				'female_number' => 51,
    				'international_students' => 9,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of South Carolina
    		$university_name = "University of South Carolina";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1801,
    				'student_population' => 30259, 
    				'staff_population' => 1811, 
    				'male_number' => 46, 
    				'female_number' => 54,
    				'international_students' => 5,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of the Pacific
    		$university_name = "University of the Pacific";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1851,
    				'student_population' => 5776, 
    				'staff_population' => 545, 
    				'male_number' => 48, 
    				'female_number' => 52,
    				'international_students' => 6,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Vermont
    		$university_name = "University of Vermont";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1791,
    				'student_population' => 12100, 
    				'staff_population' => 1422, 
    				'male_number' => 44, 
    				'female_number' => 56,
    				'international_students' => 7,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Manitoba
    		$university_name = "University of Manitoba";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1877,
    				'student_population' => 29111, 
    				'staff_population' => 1039, 
    				'male_number' => 45, 
    				'female_number' => 55,
    				'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Manitoba
    		$university_name = "University of Manitoba";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1877,
    				'student_population' => 29111, 
    				'staff_population' => 1039, 
    				'male_number' => 45, 
    				'female_number' => 55,
    				'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Istituto Marangoni
    		$university_name = "Istituto Marangoni";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1935,
    				'student_population' => 671, 
    				'male_number' => 8, 
    				'female_number' => 92,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Le Cordon Bleu
    		$university_name = "Le Cordon Bleu";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1895,
    				'student_population' => 20000, 
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Adelphi University
    		$university_name = "Adelphi University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1896,
    				'student_population' => 7256, 
    				'staff_population' => 1013, 
    				'male_number' => 32, 
    				'female_number' => 68,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// City College of New York
    		$university_name = "City College of New York";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1847,
    				'student_population' => 15931, 
    		// 'staff_population' => 1013, 
    		// 'male_number' => 32, 
    		// 'female_number' => 68,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// James Madison University
    		$university_name = "James Madison University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1908,
    				'student_population' => 19927, 
    				'staff_population' => 1319, 
    				'male_number' => 41, 
    				'female_number' => 59,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Long Island University
    		$university_name = "Long Island University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1954,
    				'student_population' => 7900, 
    				'staff_population' => 607, 
    		// 'male_number' => 41, 
    		// 'female_number' => 59,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// St George's University
    		$university_name = "St George's University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1976,
    				'student_population' => 6300, 
    				'staff_population' => 2300, 
    		// 'male_number' => 41, 
    		// 'female_number' => 59,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Texas A&M University - Corpus Christi
    		$university_name = "Texas A&M University - Corpus Christi";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1947,
    				'student_population' => 11693, 
    				'staff_population' => 294, 
    		// 'male_number' => 41, 
    		// 'female_number' => 59,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Central Florida
    		$university_name = "University of Central Florida";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1963,
    				'student_population' => 61000, 
    				'staff_population' => 1961, 
    				'male_number' => 45, 
    				'female_number' => 55,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Widener University
    		$university_name = "Widener University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1821,
    				'student_population' => 6262, 
    				'staff_population' => 326, 
    				'male_number' => 43, 
    				'female_number' => 57,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Royal Roads University
    		$university_name = "Royal Roads University";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1995,
    				'student_population' => 3500, 
    				'staff_population' => 390, 
    		// 'male_number' => 43, 
    		// 'female_number' => 57,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of New Brunswick
    		$university_name = "University of New Brunswick";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1785,
    				'student_population' => 11400, 
    		// 'staff_population' => 390, 
    		// 'male_number' => 43, 
    		// 'female_number' => 57,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Cesar Ritz
    		$university_name = "Cesar Ritz";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1982,
    				'student_population' => 2486, 
    		// 'staff_population' => 390, 
    		// 'male_number' => 43, 
    		// 'female_number' => 57,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Hotel Institute Montreux
    		$university_name = "Hotel Institute Montreux";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1984,
    				'student_population' => 1324, 
    		// 'staff_population' => 390, 
    		// 'male_number' => 43, 
    		// 'female_number' => 57,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// IHTTI School of Hotel Management
    		$university_name = "IHTTI School of Hotel Management";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1986,
    				'student_population' => 448, 
    		// 'staff_population' => 390, 
    		// 'male_number' => 43, 
    		// 'female_number' => 57,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Swiss Hotel Management School
    		$university_name = "Swiss Hotel Management School";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1997,
    				'student_population' => 2039, 
    		// 'staff_population' => 390, 
    		// 'male_number' => 43, 
    		// 'female_number' => 57,
    		// 'international_students' => 13,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University College Dublin
    		$university_name = "University College Dublin";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1854,
    				'student_population' => 21438, 
    				'staff_population' => 944, 
    		// 'male_number' => 43, 
    		// 'female_number' => 57,
    				'international_students' => 25,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University College Dublin
    		$university_name = "University College Dublin";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'year_founded'	=>	1854,
    				'student_population' => 21438, 
    				'staff_population' => 944, 
    		// 'male_number' => 43, 
    		// 'female_number' => 57,
    				'international_students' => 25,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Bellerbys College
    		$university_name = "Bellerbys College";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Coventry University ISC
    		$university_name = "Coventry University ISC";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Coventry University - Oncampus
    		$university_name = "Coventry University - Oncampus";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Durham University ISC
    		$university_name = "Coventry University - Oncampus";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Griffith College
    		$university_name = "Griffith College";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Istituto Marangoni ISC
    		$university_name = "Istituto Marangoni ISC";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Kings Education UK
    		$university_name = "Kings Education UK";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Kingston University ISC
    		$university_name = "Kingston University ISC";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// La Trobe Melbourne
    		$university_name = "La Trobe Melbourne";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Lancaster University ISC
    		$university_name = "Lancaster University ISC";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// Monash College
    		$university_name = "Monash College";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// QUT International College
    		$university_name = "QUT International College";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// The University of Sheffield ISC
    		$university_name = "The University of Sheffield ISC";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Lincoln ISC
    		$university_name = "University of Lincoln ISC";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Strathclyde ISC
    		$university_name = "University of Strathclyde ISC";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Sunderland - Oncampus
    		$university_name = "University of Sunderland - Oncampus";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Surrey ISC
    		$university_name = "University of Surrey ISC";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// University of Sussex ISC
    		$university_name = "University of Sussex ISC";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);

    	// UTAS Foundation
    		$university_name = "UTAS Foundation";
    		$university = University::where('name', '=', $university_name)->first(); 
    		if($university)
    			DB::table('university_statistic')->insert([
    				'university_id' => $university->id,
    				'created_at' 	=> Carbon::now(),
    				'updated_at' 	=> Carbon::now()
    				]);
    	}
    }
