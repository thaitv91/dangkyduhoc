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
            'title' => 'Guide',
            'data_field' => $data_field,
            'locale'     => $locale
            );
        return view('user.guide', $this->viewData);
    }

    public function autocomplete(){
        $term = Input::get('term');
    
        $results = array();
    
        $queries = GuideQuestion::where('question_en', 'LIKE', '%'.$term.'%')->get();
    
        foreach ($queries as $query)
        {
             $results[] = [ 'id' => $query->id, 'value' => $query->question_en, 'slug'=>$query->slug ];
        }
        return Response::json($results);
    }  

    public function search( $slug ){
        $locale = App::getLocale();
        $guide = GuideQuestion::where('slug', $slug)->first();

        $topic = App\Models\GuideTopic::where('id', '=', $guide->topic_id)->first();
        $guide_category = App\Models\Guide::where('id', $topic->guide_id)->first();
        $topics = App\Models\GuideTopic::where('guide_id', '=', $guide_category->id)->get();
        $guide_list = App\Models\Guide::all();

        if ($locale == 'en') {
            $title = $guide->question_en;
            $answer = $guide->anser_en;
        } else {
            $title = $guide->question;
            $answer = $guide->answer;
        }

        $data = [
            'title' => $title,
            'answer' => $answer,
            'guide_list' => $guide_list,
            'locale' => $locale,
            'topics' => $topics
        ];

        return view('user.guide-detail', $data);
    }

    public function  guideCategory($slug) {
        $locale = App::getLocale();
        $guide_category = App\Models\Guide::where('slug', $slug)->first();

        $topics = App\Models\GuideTopic::where('guide_id', '=', $guide_category->id)->get();

        $guide_list = App\Models\Guide::all();

        if ($locale == 'en') {
            $title = $guide_category->name_en;
        } else {
            $title = $guide_category->name;
        }

        $data = [
            'title' => $title,
            'guide_category' => $guide_category,
            'guide_list' => $guide_list,
            'locale' => $locale,
            'topics' => $topics
        ];

        return view('user.guide-list', $data);
    }
}
