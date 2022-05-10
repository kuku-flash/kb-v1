<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$XH232IuTQCcPEkbswdv4UeGvuvnj26M1HLKkXtN4Dgx5gyI1WCIMi', // password
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
