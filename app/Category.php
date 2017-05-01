<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function serviceproviders()
    {
    	return $this->hasMany('App\Serviceprovider');
    }
}
