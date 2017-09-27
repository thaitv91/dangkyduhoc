<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PageField;
use App\Models\Page;
use App\Models\Rating;
use App;
use Mapper;
use DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $locale = App::getLocale();
        
        $rating = Rating::all();
        $page = Page::where('slug', '=', 'home-page')->first();
        $fields = PageField::where('page_id', '=',$page->id)->get();
        foreach ($fields as $field) {
            if ($locale == 'en') {
                $data_field[$field->slug] = $field->content_en;
            } else {
                $data_field[$field->slug] = $field->content;
            }
        }

        Mapper::map(
            20.999075, 105.798329,
            [
            'zoom' => 16, 'markers' => ['title' => 'My Location', 'animation' => 'DROP'], 'clusters' => ['size' => 7, 'center' => true, 'zoom' => 20], 'eventAfterload' =>'circleListener( maps[0].shapes.[0].circle_0);'           
            ]      
        );
        $this->viewData = array(
            'data_field' => $data_field,
            'rating'     => $rating,
            'locale'     => $locale,
            );
        return view('user.homepage', $this->viewData);
    }

}
