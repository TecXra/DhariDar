<?php
use App\Serviceprovider;
use Illuminate\Database\Seeder;

class ServiceprovidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serviceprovider::create([
			'phone_number' => '0310',
			'password' => '12345',
			'lang' => '74.293792',
			'lat' => '31.451024',
			'category_id' => 1,
 		]);
        Serviceprovider::create([
			'phone_number' => '0311',
			'password' => '12345',
			'lang' => '74.315880',
			'lat' => '31.459747',
			'category_id' => 2,
 		]);
        Serviceprovider::create([
			'phone_number' => '0312',
			'password' => '12345',
			'lang' => '74.317407',
			'lat' => '31.563265',
			'category_id' => 3,
		]);
        Serviceprovider::create([
			'phone_number' => '0313',
			'password' => '12345',
			'lang' => '74.335689',
			'lat' => '31.514106',
			'category_id' => 4,
		]);
        Serviceprovider::create([
			'phone_number' => '0314',
			'password' => '12345',
			'lang' => '74.351053',
			'lat' => '31.513521',
			'category_id' => 5,
		]);
    }
}

            














