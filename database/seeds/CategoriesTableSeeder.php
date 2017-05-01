<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
			'name' => 'Plumber',
			'serviceprovider_id' => '1',
		]);
        Category::create([
			'name' => 'Electrician',
			'serviceprovider_id' => '2',
		]);
        Category::create([
			'name' => 'Carpenter',
			'serviceprovider_id' => '3',
		]);
        Category::create([
			'name' => 'Driver',
			'serviceprovider_id' => '4',
		]);
        Category::create([
			'name' => 'Tutor',
			'serviceprovider_id' => '5',
		]);
    }
}









