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
                if($data['question_en']){
                    $data['slug'] = str_slug( $data['question_en'] );
                }else if($data['question']){
                    $data['slug'] = str_slug( $data['question'] ); 
                }else{
                     $data['slug'] = str_slug( $data['question_en'] );    
                }
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
        $guide = Guide::all();
        $data = GuideQuestion::find($id);
        $guide_select = GuideTopic::where('id' , $data['topic_id'])->first();
        $topic = GuideTopic::where('guide_id', $guide_select['guide_id'])->get();
        // dd($topic);
        $this->viewData = array(
            'guide' => $guide,
            'data'  => $data,
            'guide_select' => $guide_select,
            'topic' => $topic
        );
        return view('admin.guideQuestion.edit', $this->viewData);
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
                if($data['question_en']){
                    $data['slug'] = str_slug( $data['question_en'] );
                }else if($data['question']){
                    $data['slug'] = str_slug( $data['question'] ); 
                }else{
                     $data['slug'] = str_slug( $data['question_en'] );    
                }
                $datas = GuideQuestion::where('id', $id)->first();
                $datas->update($data);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            GuideQuestion::find( $id )->delete();
            DB::commit();
            Session::flash('success','Success');
            return Redirect::back();

        } catch(\Exception $e) {
            \Log::info( $e->getMessage() );
            DB::rollback();
            Session::flash('error','Error');
            return Redirect::back();
        }
    }

    public function getUrlDelete(Request $request) {
        $id = $request->id;
        if (isset($id)) {
            return route('admin.guideQuestion.delete',['id'=>$id]);
        }
        return -1;
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
