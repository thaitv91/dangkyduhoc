<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Models\PageField;
use App\Models\Page;
use App\Models\GuideQuestion;
use Illuminate\Support\Facades\Input;
use Response;
class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $locale = App::getLocale();
        $page = Page::where('slug', '=', 'guide-page')->first();
        $fields = PageField::where('page_id', '=',$page->id)->get();
        foreach ($fields as $field) {
            if ($locale == 'en') {
                $data_field[$field->slug] = $field->content_en;
            } else {
                $data_field[$field->slug] = $field->content;
            }
        }
        $this->viewData = array(
            'data_field' => $data_field,
            'locale'     => $locale
            );
        return view('user.guide', $this->viewData);
    }
}
