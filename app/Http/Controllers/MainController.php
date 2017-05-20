<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siteuser;
use App\Serviceprovider;
use App\Profiledetail;
use App\Category;
use DB;
class MainController extends Controller
{
     public function users(){
     	return Siteuser::all();
     }

     public function serviceProviders(){
     	return Serviceprovider::all();
     }

     public function profileOfServiceProvider($id){
     	//$id =2;

return Category::join('serviceproviders', 'categories.id', '=', '                      serviceproviders.category_id')
            ->join('profiledetails', 'serviceproviders.id', '=', 'profiledetails.serviceprovider_id')
            ->select('*')
            ->where('categories.id', '=', $id)->first();

     }

     public function CategoriesOfUser($id){
     	//$id =1;
     	return Category::find(1)->serviceproviders;
     	
     }
     public function AllCategories(){
     	return Category::all();
     	
     }


public function siteUserRequest($id){
          //$id =2;

return DB::table('requests')->join('siteusers', 'siteusers.id', '=','requests.site_user_id')->join('serviceproviders', 'serviceproviders.id', '=','requests.service_provider_id')
            ->select('*')
            ->where('siteusers.id', '=', $id)->get();

     }

}
