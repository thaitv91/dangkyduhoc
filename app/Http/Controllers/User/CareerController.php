<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Career;
class CareerController extends Controller
{
    public function viewDetail( $slug ){

      $career = Career::where( 'slug' , $slug )->first();
      $this->viewData = array(
        'career' => $career,
      ); 
      return view( 'user.careers' , $this->viewData );
    }
}
