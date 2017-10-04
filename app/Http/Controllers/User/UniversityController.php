<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityStatistic;
use App\Models\UniversityRanking;
use App\Models\UniversityMetas;
use App\Models\Country;
use App\Models\Map;
use App\Models\MapLocation;
use App;
class UniversityController extends Controller
{
    public function viewDetail( $slug ){
      
      $university = University::where( 'slug' , $slug )->first();
      $statistic = UniversityStatistic::where( 'university_id', $university->id )->first();
      $meta = UniversityMetas::where( 'university_id', $university->id )->first();
      $ranking = UniversityRanking::where( 'university_id', $university->id )->get();
      $locale = App::getLocale();
     
      $map_university = Map::where('id', $university->map_id)->first(); 
        $markers = array();       
            $temp = [$university->name , $map_university['lat'], $map_university['lng']];
            array_push($markers, $temp);

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
        'markers' => $markers,
        'map_university' => $map_university,
        'images'	=>	$images,
      ); 

      return view( 'user.universities' , $this->viewData );
    }

    public function getMarker( Request $request ) {
      $location = $request->location;
      $university_id = $request->university_id;
      $university = University::where('id', $university_id)->first();
        $location_map = MapLocation::where('map_id', $university->map_id )->where('type', $location)->get();
        $markers = array(); 
        foreach ($location_map as $key => $location) {
            $temp = [$location->name, $location->lat, $location->lng, $key+1];
            array_push($markers, $temp);
        }
      return $markers;
    }
}
