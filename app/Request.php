<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function serviceProvider()
	{
		return $this->belongsTo('App\Serviceprovider'); 
	}

	public function siteUser()
	{
		return $this->belongsTo('App\Siteuser'); 
	}
}
