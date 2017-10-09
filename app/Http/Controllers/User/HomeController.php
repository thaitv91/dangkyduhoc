<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PageField;
use App\Models\Page;
use App\Models\Rating;
use App\Models\CustomField;
use App;

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
                $title = "Home page";
                if ($field->slug == 'header-banner' || $field->slug == 'image-right-tools') {
                    $data_field[$field->slug] = $field->content;
                } else {
                    $data_field[$field->slug] = $field->content_en;
                }
            } else {
                $title = "Trang chủ";
                $data_field[$field->slug] = $field->content;
            }
        }
        $custom_field = CustomField::first();

        $this->viewData = array(
            'title'         => $title,
            'data_field'    => $data_field,
            'rating'        => $rating,
            'locale'        => $locale,
            'custom_field'        => $custom_field,
            );
        return view('user.homepage', $this->viewData);
    }

}
