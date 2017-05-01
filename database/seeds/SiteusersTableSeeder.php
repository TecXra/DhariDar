<?php

use Illuminate\Database\Seeder;

class SiteusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siteuser::create([
			'phone_number' => '0300',
			'password' => '12345',
		]);
        Siteuser::create([
			'phone_number' => '0301',
			'password' => '12345',
		]);
        Siteuser::create([
			'phone_number' => '0302',
			'password' => '12345',
		]);
        Siteuser::create([
			'phone_number' => '0303',
			'password' => '12345',
		]);
        Siteuser::create([
			'phone_number' => '0304',
			'password' => '12345',
		]);
    }
}











