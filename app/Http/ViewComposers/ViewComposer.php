<?php 

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Map;
use App\Models\MapLocation;
class ViewComposer
{
	protected  $hotLine =[];
	protected $img_logo_footer = [];
	public function __construct() 
    {	  
      $locations = Map::where('slug', 'map-footer')->first();
        if($locations) {
          $footer_lat = $locations->lat;
          $footer_long = $locations->lng;
        
        $locations_footer = MapLocation::where('map_id', $locations->id )->get();
        $footer_location = array(); 
        foreach ($locations_footer as $key => $location) {
            $temp = [$location->name, $location->lat, $location->lng, $key+1];
            array_push($footer_location, $temp);
        }
        $this->footer_lat = $footer_lat ;
        $this->footer_long = $footer_long ;
        $this->footer_location = $footer_location ;
        }

    }
	public function compose(View $view)
  	{
      $view->with('footer_lat',$this->footer_lat);
      $view->with('footer_long',$this->footer_long);
    	$view->with('footer_location',$this->footer_location);
  	}
}