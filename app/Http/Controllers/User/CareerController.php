<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App;
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
}
