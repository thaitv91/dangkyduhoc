<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class FileController extends Controller
{
    public function uploadImageSubjectBanner($avatar) {
        $filename = 'subject_' . time() . '_' . $avatar->getClientOriginalName();
        Image::make($avatar)->save( public_path('/images/' . $filename ) );
        $image_url = '/images/' . $filename;
        //$rating = Rating::where('id', $id)->first();
        //$rating->update($data);
        return $image_url;
    }
}
