<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SiteusersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(ServiceprovidersTableSeeder::class);
         
          $this->call(ProfiledetailsTableSeeder::class);
            $this->call(RequestTableSeeder::class);
      }
  

}
