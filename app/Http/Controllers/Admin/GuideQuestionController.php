<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guide;
use App\Models\GuideTopic;
use App\Models\GuideQuestion;
use DB;
use Session;
use Redirect;
use Validator;
use Storage;
use Log;

class GuideQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GuideQuestion::orderBy('id', 'DESC')->get();
        $this->viewData = array(
            'data' => $data
            );
        return view( 'admin.guideQuestion.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guide = Guide::all();
        $this->viewData = array(
            'guide' => $guide
        );
        return view('admin.guideQuestion.create', $this->viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        try {
            $rules = [
                'question'               =>'required',
                'question_en'            =>'required',
                'topic_id'               =>'required'
                ];

            $messages = [
                'question.required'      =>'Please enter the question!!',
                'question.required'      =>'Please enter the question!!',
                'topic_id.required'      =>'Please chose the topic!!',
                                
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                $data['slug'] = str_slug( $data['question_en'] );
                $datas = GuideQuestion::create($data);
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.guideQuestion.index'));
                
            }
        } catch (Exception $e) {
            Session::flash('error','Opp! Please try again.Error!');
            DB::rollback();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajax(Request $request)
    {   
        $id = $request->id;
        $guide_topic = GuideTopic::where('guide_id' , $id)->get();
        $html = '';
        foreach ($guide_topic as $key => $value) {
             # code...
            $html .=  "<option value='".$value['id']."'>".$value['title_en']."</option>";

        }
        return response()->json($html);

    }
}
