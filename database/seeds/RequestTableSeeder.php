<?php

use Illuminate\Database\Seeder;
use App\Request;
class RequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Request::create([
			'name' => 'hooohahaha',
			'site_user_id' => '1',
			'service_provider_id' => '1',
		]);
		Request::create([
			'name' => 'hooohahaha',
			'site_user_id' => '2',
			'service_provider_id' => '3',
		]);
		Request::create([
			'name' => 'hooohahaha',
			'site_user_id' => '2',
			'service_provider_id' => '3',
		]);
		Request::create([
			'name' => 'hooohahaha',
			'site_user_id' => '4',
			'service_provider_id' => '5',
		]);
		Request::create([
			'name' => 'hooohahaha',
			'site_user_id' => '3',
			'service_provider_id' => '4',
		]);
		Request::create([
			'name' => 'hooohahaha',
			'site_user_id' => '5',
			'service_provider_id' => '1',
		]);
		Request::create([
			'name' => 'hooohahaha',
			'site_user_id' => '3',
			'service_provider_id' => '3',
		]);
		Request::create([
			'name' => 'hooohahaha',
			'site_user_id' => '2',
			'service_provider_id' => '4',
		]);
		Request::create([
			'name' => 'hooohahaha',
			'site_user_id' => '1',
			'service_provider_id' => '5',
		]);
    }
}
