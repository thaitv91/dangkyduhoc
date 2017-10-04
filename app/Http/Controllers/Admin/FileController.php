<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class FileController extends Controller
{
    public function uploadImage($folder, $file) {

    	if (!is_dir($folder)) {
    		mkdir(public_path($folder), 755, true);         
    	}

        $filename = time() . '_' . $file->getClientOriginalName();
        Image::make($file)->save( public_path($folder).'/'.$filename );
        $image_url = $folder .'/'. $filename;

        return $filename;
    }
}
