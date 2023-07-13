<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categories = [
            [
                'id'    => 1,
                'category_name' => 'Houses',
            ],
            [
                'id'    => 2,
                'category_name' => 'Cars',
            ],
            [
                'id'    => 3,
                'category_name' => 'Lands',
            ],
            [
                'id'    => 4,
                'category_name' => 'Car-Hire',
            ],
            [
                'id'    => 5,
                'category_name' => 'BnB',
            ],
            [
                'id'    => 6,
                'category_name' => 'Commercials',
            ],
            [
                'id'    => 7,
                'category_name' => 'Car-events',
            ],
        
        ];

        Category::insert($Categories);
    }
}
