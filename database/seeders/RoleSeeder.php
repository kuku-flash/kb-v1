<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'superadmin',
            ],
            [
                'id'    => 2,
                'title' => 'admin',
            ],
            [
                'id'    => 3,
                'title' => 'user',
            ],
            [
                'id'    => 4,
                'title' => 'business',
            ],
        
        
        ];

        Role::insert($roles);
    }
}
