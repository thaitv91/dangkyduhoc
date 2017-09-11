<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageField extends Model
{
    protected $fillable = [
        'title', 'type', 'page_id', 'content', 'slug', 'content_en'
    ];

    public function render() {
        switch ($this->type) {
            case 'text':
                $html = '<div class="form-group row"><label  class="col-md-3 row" for="name">'.$this->title.'</label><div class="col-md-9 row"><input class="form-control" type="text" id="'. $this->id .'" name="'. $this->slug .'" value="'. $this->content_en .'"></div></div>';
                break;
            case 'textarea':
                $html = '<div class="form-group row"><label  class="col-md-3 row" for="name">'.$this->title.'</label><div class="col-md-9 row"><textarea class="form-control my-editor" rows="5" id="'. $this->id .'" name="'. $this->slug .'" >'. $this->content_en .'</textarea></div></div>';
                break;            
            default:
                # code...
   
                break;
        }

        return $html;
    }
}
