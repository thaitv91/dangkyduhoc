<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\SliderImage;
use Validator, Session, Redirect, DB;
use Intervention\Image\ImageManagerStatic as Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $image;
    private $slider;
    private $slider_image;

    public function __construct() {
        $this->image = new FileController;
        $this->slider = new Slider;
        $this->slider_image = new SliderImage;
    }

    public function index()
    {
        $data = $this->slider->all();
        // dd($data[0]->images()->get());
        return view('admin.slider.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    //Upload phan create new
    public function uploadImage(Request $request){
        //Khoi tao 
        $image = $request->file;
        $temp_folder = 'image/temp/slider';
        
        return $this->image->uploadImage($temp_folder, $image);
    }

    public function removeImage(Request $request){
        $id = $request->id?$request->id:-1;
        $name = $request->name;
        $real_folder = 'image/slider/'.$id;
        $data = $this->slider_image->where('url',$real_folder.'\\'.$name)->first();
        if(count($data) != 0)
            return json_encode($data);

        return -1;
    }

    public function doUploadImage($id,$data_img){
        //Khoi tao thu muc
        $temp_folder = 'image/temp/slider';
        $real_folder = 'image/slider/'.$id;
        // $old_images = array();
        if (!is_dir($real_folder)) {
            mkdir(public_path($real_folder), 755, true);         
        }
        //Luu anh vao server
        try {
            foreach ($data_img as $key => $value) {
                $temp = explode(",", $value);
                $is_oldImage = $temp[0];//0-newfile, 1-oldfile
                $file_name = $temp[1];
                if ($file_name != "undefined") {
                    if($is_oldImage == 0){
                        // Storage::move($temp_folder.$file_name,$real_folder.$file_name);
                        $new_image = Image::make($temp_folder.'/'.$file_name);
                        $new_name = $new_image->basename;
                        $new_image->save($real_folder.'/'.$new_name);

                        $this->slider_image->create([
                            'slider_id'    =>  $id,
                            'url'          =>  $real_folder.'\\'.$file_name,
                            ]);
                    }else{
                        // array_push($old_images, $real_folder.$file_name);
                        $this->slider_image->where('url',$real_folder.'\\'.$file_name)->delete();
                    }
                }
            }//end foreach
            //Xoa sau khi da thuc hien xong
            // Storage::deleteDirectory($temp_folder);
            Session::flash('success', Session::flash('success', 'Success'));
        } catch (Exception $e) {
            Session::flash('error', Session::flash('error', 'Error'));
            // dd($e);
            return false;
        }
        return true;
    }

    public function getImage(Request $request){
        $id = $request->id;
        $real_folder = 'image/slider/'.$id;
        $data = $this->slider->find($id)->images()->get();
        
        foreach ($data as $key => $value) {
            $value->path = asset(str_replace('\\', '/', $value->url));
        }

        return $data;
    }

    public function isEmptyImage($images) {
        foreach ($images as $key => $value) {
            if (strpos($value, '0,') !== false)
                return false;
        }
        return true; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $images = $request->img_info;

        if (!isset($images) || $this->isEmptyImage($images)) {
            Session::flash('error', 'Please upload image');
            return Redirect::back();
        }

        //Create slider
        if (count($this->slider->where('name', $request->name)->first()) != 0) {
            Session::flash('error', 'Name is exists');
            return Redirect::back(); 
        }

        $slider = $this->slider->create([
            'name'  =>  $request->name,
        ]);
        //Create slider image
        $this->doUploadImage($slider->id, $images);

        Session::flash('success', 'Create success');

        return Redirect::back();
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
        $data = $this->slider->where('id', $id)->first();

        if(count($data) == 0) {
            Session::flsah('error', 'Data was not found');

            return Redirect::route('admin.slider');
        }
    
        return view('admin.slider.edit', compact(['data']));
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
        $images = $request->img_info;

        if (!isset($images) || $this->isEmptyImage($images)) {
            Session::flash('error', 'Please upload image');
            return Redirect::back();
        }

        //Create slider
        if (count($this->slider->where('id', '<>', $id)->where('name', $request->name)->first()) != 0) {
            Session::flash('error', 'Name is exists');
            return Redirect::back(); 
        }

        $slider = $this->slider->where('id', $id)->update([
            'name'  =>  $request->name,
        ]);
        //Create slider image
        $this->doUploadImage($id, $images);

        Session::flash('success', 'Update success');

        return Redirect::back();
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
            $this->slider->where('id', $id)->delete();
            $this->slider_image->where('slider_id', $id)->delete();

            DB::commit();
        } catch (Exception $e) {
            Session::flash('error', 'Error');
            
            DB::rollback();

            return Redirect::back();
        }

        Session::flash('success', 'Success');

        return Redirect::back();
    }
}
