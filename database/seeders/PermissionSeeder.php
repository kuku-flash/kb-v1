<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'id'    => 1,
                'title' => 'user-access',
            ],
            [
                'id'    => 2,
                'title' => 'user-create',
            ],
            [
                'id'    => 3,
                'title' => 'user-edit',
            ],
            [
                'id'    => 4,
                'title' => 'user-delete',
            ],
            [
                'id'    => 5,
                'title' => 'user-show',
            ],
            [
                'id'    => 6,
                'title' => 'role-access',
            ],
            [
                'id'    => 7,
                'title' => 'role-create',
            ],
            [
                'id'    => 8,
                'title' => 'role-edit',
            ],
            [
                'id'    => 9,
                'title' => 'role-show',
            ],
            [
                'id'    => 10,
                'title' => 'role-delete',
            ],
        
        
        ];

        Permission::insert($permission);
    }
}
