<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PageField;
use App\Models\Page;
use App\Models\Rating;
use App\Models\Map;
use App;

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
        // dd(json_encode($data_location));
        $this->viewData = array(
            'data_field' => $data_field,
            'rating'     => $rating,
            'locale'     => $locale,
            );
        return view('user.homepage', $this->viewData);
    }

}
