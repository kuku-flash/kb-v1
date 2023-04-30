<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(PermissionSeeder::class);
        // $this->call(RoleSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(RoleUserSeeder::class);v
        // $this->call(CountySeeder::class);
        $this->call(CitySeeder::class);
        // $this->call(MakeSeeder::class);
       // $this->call(ModelSeeder::class);
      
    }
}
