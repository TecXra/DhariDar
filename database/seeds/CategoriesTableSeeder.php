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
			
		]);
        Category::create([
			'name' => 'Electrician',
			
		]);
        Category::create([
			'name' => 'Carpenter',
			
		]);
        Category::create([
			'name' => 'Driver',
			
		]);
        Category::create([
			'name' => 'Tutor',
			
		]);
    }
}









