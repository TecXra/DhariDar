<?php

use Illuminate\Database\Seeder;
use App\Profiledetail;

class ProfiledetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	    ProfileDetail::create([
			'avatar' => 'null',
			'first_name' => 'Haider',
			'last_name' => 'ali',
			'address' => 'lahore',
			'serviceprovider_id' => 1,
 		]);

    	    ProfileDetail::create([
			'avatar' => 'null',
			'first_name' => 'Zeeshan',
			'last_name' => 'Nawaz',
			'address' => 'lahore',
			'serviceprovider_id' => 2,
 		]);

    	    ProfileDetail::create([
			'avatar' => 'null',
			'first_name' => 'Saleem',
			'last_name' => 'Naveed',
			'address' => 'lahore',
			'serviceprovider_id' => 3,
 		]);

    	    ProfileDetail::create([
			'avatar' => 'null',
			'first_name' => 'Mohsin',
			'last_name' => 'Bajwa',
			'address' => 'lahore',
			'serviceprovider_id' => 4,
 		]);

    	    ProfileDetail::create([
			'avatar' => 'null',
			'first_name' => 'Ahsan',
			'last_name' => 'Mehmood',
			'address' => 'lahore',
			'serviceprovider_id' => 5,
 		]);




    }
}
