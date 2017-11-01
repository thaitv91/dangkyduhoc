<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App;
use Cookie;

class CareerController extends Controller
{
	public function viewDetail( $slug ){
		$locale = App::getLocale();
		$careers = Career::where( 'slug' , $slug )->first();
		if ($locale == 'en') {
			$careers['name']= $careers->name_en;
			$careers['description'] = $careers->description_en;
		} else {
			$careers['name'] = $careers->name;
			$careers['description'] = $careers->description;
		}	
		$this->viewData = array(
			'careers' => $careers,
			'locale'	=> $locale
		); 
		return view( 'user.careers' , $this->viewData );
	}

	public function setCookieFrequentlyVisitedCareerIds(Request $request) {

        $career_slug = $request->career_slug;
        $career_ids = (array)json_decode(Cookie::get('frequent_visited_career_ids', json_encode(array())));
        $career_db = Career::where('slug', $career_slug)->first();
        $cookie = new Response;
        if (count($career_db) > 0) {
            $career_id = $career_db->id;
            //id belongs to university_ids and index of id != 0 => swap index
            $index = array_search($career_id, $career_ids);

            if($index == false){
                if ($index !== 0) {
                    $temp = array();
                    array_push($temp, $career_id);
                    for ($i=0; $i < 2; $i++) {
                        if (isset($career_ids[$i])) {
                            array_push($temp, $career_ids[$i]);
                        }
                    }
                    $career_ids = $temp;
                }
            } else {
                $tmp = $career_ids[0];
                $career_ids[0] = $career_ids[$index];
                $career_ids[$index] = $tmp;

                $tmp = $career_ids[1];
                $career_ids[1] = $career_ids[$index];
                $career_ids[$index] = $tmp;
            }
        }
        $cookie->withCookie(cookie()->forever('frequent_visited_career_ids', json_encode($career_ids)));
        return $cookie;
    }
}

