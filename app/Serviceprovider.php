<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serviceprovider extends Model
{
	public function profiledetails()
	{
		return $this->hasOne('App\Profiledetail'); 
	}
	public function categories()
	{
		return $this->belongsTo('App\Category');
	}
}
