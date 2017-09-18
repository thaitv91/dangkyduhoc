<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityStatistic;
use App\Models\UniversityRanking;
use App\Models\UniversityMetas;
use App\Models\Country;

class UniversityController extends Controller
{
    public function viewDetail( $slug ){

      $university = University::where( 'slug' , $slug )->first();
      $statistic = UniversityStatistic::where( 'university_id', $university->id )->first();
      $meta = UniversityMetas::where( 'university_id', $university->id )->first();
      $ranking = UniversityRanking::where( 'university_id', $university->id )->get();

      $this->viewData = array(
        'university' => $university,
        'statistic' => $statistic,
        'meta'  => $meta,
        'ranking' => $ranking,
      ); 

      return view( 'user.universities' , $this->viewData );
    }
}
