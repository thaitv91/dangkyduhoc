<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\University;
use App\Models\UniversityMetas;
use App\Models\UniversityRanking;
use App\Models\UniversityStatistic;
use App\Models\Country;
use App\Models\Map;
use App\Models\Slider;
use DB;
use Session;
use Redirect;
use Validator;
use Storage;
use Log;
use Intervention\Image\ImageManagerStatic as Image;
class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $image;

    public function __construct() {
        $this->image = new FileController;
    }

    public function index()
    {
        $universites = University::all();
        $this->viewData = array(
            'universites' => $universites
        );

        return view('admin.universities.index', $this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $country = Country::all();
        $map = Map::all();
        $images = Slider::all();
        $this->viewData = array(
            'country'    => $country,
            'images'      => $images,
            'map' => $map
         );

        return view('admin.universities.create', $this->viewData);
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
                'country_id'               =>'required',
                'logo'                     =>'required',
                'map_id'                   =>'required'
                ];

            $messages = [
                'country_id.required'      =>'Please choose one country!!',                    
                'map_id.required'           =>'Please choose one map!!',                    
                'logo.required'            =>'Please choose the logo!!',                    
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();

                if($data['name_en']){
                    $data['slug'] = str_slug( $data['name_en'] );
                }else if($data['name']){
                    $data['slug'] = str_slug( $data['name'] ); 
                }else{
                     $data['slug'] = str_slug( $data['name_en'] );    
                }

                $country = Country::where('id', $data['country_id'])->first();
                $data['country_slug'] = $country->slug;
                //Upload logo
                $logo = $data['logo'];
                $folder = 'image/university/logo';
                $logo = $this->image->uploadImage($folder, $logo);
                $data['logo'] = $folder.'/'.$logo;
                $data['slider_id'] = $data['image'];
                $university = University::create($data);

                $university_id = $university->id;
                $university_meta = new UniversityMetas;
                $university_meta->university_id = $university_id;
                $university_meta->about = $request->about;
                $university_meta->campus = $request->campus;
                $university_meta->facebook = $request->facebook;
                $university_meta->twitter = $request->twitter;
                $university_meta->youtube = $request->youtube;
                $university_meta->flickr = $request->flickr;
                $university_meta->website = $request->website;
                $university_meta->phone = $request->phone;
                $university_meta->save();
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.universities.index'));                
            }
        } catch (Exception $e) {
            Session::flash('error','Opp! Please try again.Error!');
            DB::rollback();
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show($university_slug)
    {
        // donot action
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $map = Map::all();
        $university = University::find($id);
        $country = Country::all();
        $images = Slider::all();
        $universities = University::all();
        $university_meta = $university->universityMeta;
        $this->viewData = array(
            'university' => $university,
            'university_meta'      =>  $university_meta,
            'universities'=> $universities,
            'country'    => $country,
            'map' => $map,
            'images'      => $images,
         );
        return view('admin.universities.edit', $this->viewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        try {
            $rules = [
                'country_slug'               =>'required',
                'map_id'                   =>'required'
                ];

            $messages = [
                'map_id.required'      =>'Please choose one map!!',                              
                'country_slug'               =>'Please choose one country',
            ];

            $validator = Validator::make( $request->all(), $rules, $messages);

            if ( $validator->fails() ){
                return redirect()->back()->withInput($data)->withErrors($validator);
            }else{
                DB::beginTransaction();
                if($request->hasFile('logo')){
                    $logo = $data['logo'];
                    $folder = 'image/university/logo';
                    $logo = $this->image->uploadImage($folder, $logo);
                    $data['logo'] = $folder.'/'.$logo;
                }
                if($data['name_en']){
                    $data['slug'] = str_slug( $data['name_en'] );
                }else if($data['name']){
                    $data['slug'] = str_slug( $data['name'] ); 
                }else{
                     $data['slug'] = str_slug( $data['name_en'] );    
                }
                $country = Country::where('slug', $data['country_slug'])->first();
                $data['country_slug'] = $country->slug;
                $data['slider_id'] = $data['image'];
                $university = University::where('id', $id)->first();
                $university->update($data);
                $university_meta = $university->universityMeta;
                $university_meta->campus = $request->campus;
                $university_meta->about = $request->about;
                $university_meta->facebook = $request->facebook;
                $university_meta->twitter = $request->twitter;
                $university_meta->youtube = $request->youtube;
                $university_meta->flickr = $request->flickr;
                $university_meta->website = $request->website;
                $university_meta->phone = $request->phone;
                $university_meta->save();
                DB::commit();
                Session::flash('success','Success!');
                return redirect(route('admin.universities.index'));    
            }

        } catch (Exception $e) {
            Session::flash('error','Opp! Please try again.Error!');
            DB::rollback();
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            University::find( $id )->delete();
            UniversityMetas::where('university_id', $id)->delete();
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
            return route('admin.universities.delete',['id'=>$id]);
        }
        return -1;
    }
}
