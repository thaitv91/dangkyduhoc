<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;
use App;
class PageField extends Model
{
    protected $fillable = [
        'title', 'type', 'page_id', 'content', 'slug', 'content_en'
    ];

    public function render() {
        $locale = App::getLocale();

        if($locale == 'en'){
            $content = $this->content_en;
        } else {
            $content = $this->content;
        }
        switch ($this->type) {
            case 'text':
                $html = '<div class="form-group row"><label  class="col-md-3 row" for="name">'.$this->title.'</label><div class="col-md-6 row"><input class="form-control" type="text" id="'. $this->id .'" name="'. $this->slug .'" value="' . trim($content, '</p>') . '"></div><div class="col-md-3 row"><input class="form-control" type="text" readonly value="' . $this->slug . '"></div></div>';
                break;
            case 'textarea':
                $html = '<div class="form-group row"><label  class="col-md-3 row" for="name">'.$this->title.'</label><div class="col-md-9 row"><textarea class="form-control" rows="5" id="'. $this->id .'" name="'. $this->slug .'" >'. $content .'</textarea></div><div class="col-md-3 row"><input class="form-control" type="text" readonly value="' . $this->slug . '"></div></div>';
                break; 
            case 'file':
                $html = '<div class="form-group row"><label  class="col-md-3 row" for="name">'.$this->title.'</label><div class="col-md-9 row"><input type="file" name="'. $this->slug .'" value="" id="'. $this->slug .'" class="required borrowerImageFile" data-errormsg="PhotoUploadErrorMsg"><img src="'. $content .'" id="previewHolder-'. $this->id .'" alt="" width="170px" height="100px"/></div><div class="col-md-3 row"><input class="form-control" type="text" readonly value="' . $this->slug . '"></div></div>';
                break;
             case 'select':
                $data = explode(',', $content);
                $html = '<div class="form-group row"><label  class="col-md-3 row" for="name">'.$this->title.'</label><div class="col-md-9 row"><textarea class="form-control" rows="5" id="'. $this->id .'" name="'. $this->slug .'" >'. $content .'</textarea></div><div class="col-md-3 row"><input class="form-control" type="text" readonly value="' . $this->slug . '"></div></div>';

                break;           
            default:
                # code...
                break;
        }

        return $html;
    }

    public function getLocale()
    {
        $locale = App::getLocale();
        
        if($locale == 'en'){
            $content = 'content_en';
        } else {
            $content = 'content';
        }
        return $content;
    }
}
