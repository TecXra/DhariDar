<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siteuser;
use App\Serviceprovider;
use App\Profiledetail;
use App\Category;
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
     	return Serviceprovider::find($id)->profiledetails;

     }

     public function CategoriesOfUser($id){
     	//$id =1;
     	return Category::find(1)->serviceproviders;
     	
     }
     public function AllCategories(){
     	return Category::all();
     	
     }
}
