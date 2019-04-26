<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rating;
use DB;
use Session;
use Redirect;
use Validator;
use Log;
use Intervention\Image\ImageManagerStatic as Image;
class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rating::orderBy('id', 'DESC')->paginate(10);
        $this->viewData = array(
            'title' =>  'Rating | List',
            'data' => $data
        );
        return view ('admin.rating.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Rating | Create';
        return view('admin.rating.create', compact(['title']));
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
                'name'                 =>'required',
            ];
            $messages = [
                'name.required'        =>'Please enter the name!!!',
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                $avatar = $data['avatar'];
                $name_img = $avatar->getClientOriginalName();
                $data['avatar']= $request->file( 'avatar' )->storeAs( 'public/img/rating',$name_img );  
                $rating = Rating::create($data);

                Session::flash('success','Success!');
                return redirect(route('admin.rating.index'));
            }

        } catch (Exception $e) {
            Session::flash('error','Opp! Please try again.Error!');
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
        $data = Rating::find($id);
        $this->viewData = array(
            'title' =>  'Rating | Edit',
            'data' => $data
        );
        return view('admin.rating.edit', $this->viewData);
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
            'name'                 =>'required',
            ];
            $messages = [
             'name.required'        =>'Please enter the name!!!',
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                if(!$request->hasFile('avatar')){
                    $rating = Rating::where('id', $id)->first();
                    $rating->update($data);
                }else{
                    $avatar = $data['avatar'];
                    $filename = 'avatar_' . time() . '_' . $avatar->getClientOriginalName();
                    Image::make($avatar)->save( public_path('/images/' . $filename ) );
                    $data['avatar'] = '/images/' . $filename;
                    $rating = Rating::where('id', $id)->first();
                    $rating->update($data);
                }
                

                Session::flash('success','Success!');
                return redirect(route('admin.rating.index'));
            }

        } catch (Exception $e) {
            Session::flash('error','Opp! Please try again.Error!');
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
            Rating::find( $id )->delete();
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
            return route('admin.rating.delete',['id'=>$id]);
        }
        return -1;
    }
}
