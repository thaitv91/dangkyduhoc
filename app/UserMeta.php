<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    //
	protected $table = 'user_metas';
	protected $guarded = array();

	public function getUserInfo() {
		return $this->hasOne('App\User','user_id');
	}
}
