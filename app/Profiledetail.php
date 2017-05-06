<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiledetail extends Model
{
    public function serviceproviders()
    {
    	return $this->belongsTo('App\Serviceprovider');
    }
}
