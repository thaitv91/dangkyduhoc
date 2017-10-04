<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityStatistic;
use App\Models\UniversityRanking;
use App\Models\UniversityMetas;
use App\Models\Country;
use App;
class UniversityController extends Controller
{
	public function viewDetail( $slug ){

		$university = University::where( 'slug' , $slug )->first();
		$statistic = UniversityStatistic::where( 'university_id', $university->id )->first();
		$meta = UniversityMetas::where( 'university_id', $university->id )->first();
		$ranking = UniversityRanking::where( 'university_id', $university->id )->get();
		$locale = App::getLocale();

		if ($locale == 'en') {
			$university['name']= $university->name_en;
			$meta['about'] = $meta->about_en;
			$meta['campus'] = $meta->campus_en;
		} else {
			$university['name'] = $university->name;
			$meta['about'] = $meta->about;
			$meta['campus'] = $meta->campus;
		} 

		$slider = $university->slider()->first();
		$images = array();

		if (count($slider) != 0)
			$images = $slider->images;

		$this->viewData = array(
			'university' => $university,
			'statistic' => $statistic,
			'meta'  => $meta,
			'ranking' => $ranking,
			'locale'  => $locale,
			'images'	=>	$images,
		); 
		// dd($university);
		// dd(asset(str_replace('\\', '/', $university->slider()->first()->images()->get()[0]->url)));

		return view( 'user.universities' , $this->viewData );
	}
}
