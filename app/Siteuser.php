<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siteuser extends Model
{
    protected $fillable = [
'phone_number',
'password',
    ];

    public function request()
	{
		return $this->hasMany('App\Request');
	}
}
