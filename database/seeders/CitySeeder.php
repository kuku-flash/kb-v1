<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [ 'id' => 1, 'city' => 'Embakasi', 'county_id' => '2'  ],
            [ 'id' => 2, 'city' => 'Karen', 'county_id' => '2'  ],
            [ 'id' => 3, 'city' => 'Kilimani', 'county_id' => '2'  ],
            [ 'id' => 4, 'city' => 'Nairobi Central', 'county_id' => '2'  ],
            [ 'id' => 5, 'city' => 'Ngara', 'county_id' => '2'  ],
            [ 'id' => 6, 'city' => 'Airbase', 'county_id' => '2'  ],
            [ 'id' => 7, 'city' => 'Chokaa', 'county_id' => '2'  ],
            [ 'id' => 8, 'city' => 'Dagoretti', 'county_id' => '2'  ],
            [ 'id' => 9, 'city' => 'Dandora', 'county_id' => '2'  ],
            [ 'id' => 10, 'city' => 'Donholm', 'county_id' => '2'  ],
            [ 'id' => 11, 'city' => 'Eastleigh', 'county_id' => '2'  ],
            [ 'id' => 12, 'city' => 'Gikomba', 'county_id' => '2'  ],
            [ 'id' => 13, 'city' => 'Githurai', 'county_id' => '2'  ],
            [ 'id' => 14, 'city' => 'Huruma', 'county_id' => '2'  ],
            [ 'id' => 15, 'city' => 'Imara Daima', 'county_id' => '2'  ],
            [ 'id' => 16, 'city' => 'Industrial Area Nairobi', 'county_id' => '2'  ],
            [ 'id' => 17, 'city' => 'Jamhuri', 'county_id' => '2'  ],
            [ 'id' => 18, 'city' => 'Kabiro', 'county_id' => '2'  ],
            [ 'id' => 19, 'city' => 'Kahawa', 'county_id' => '2'  ],
            [ 'id' => 20, 'city' => 'Kahawa West', 'county_id' => '2'  ],
            [ 'id' => 21, 'city' => 'Kamulu', 'county_id' => '2'  ],
            [ 'id' => 22, 'city' => 'Kangemi', 'county_id' => '2'  ],
            [ 'id' => 23, 'city' => 'Kariobangi', 'county_id' => '2'  ],
            [ 'id' => 24, 'city' => 'Kasarani', 'county_id' => '2'  ],
            [ 'id' => 25, 'city' => 'Kawangware', 'county_id' => '2'  ],
            [ 'id' => 26, 'city' => 'Kayole', 'county_id' => '2'  ],
            [ 'id' => 27, 'city' => 'Kiamaiko', 'county_id' => '2'  ],
            [ 'id' => 28, 'city' => 'Kibra', 'county_id' => '2'  ],
            [ 'id' => 29, 'city' => 'Kieleshwa', 'county_id' => '2'  ],
            [ 'id' => 30, 'city' => 'Kitisuru', 'county_id' => '2'  ],
            [ 'id' => 31, 'city' => 'Komarock', 'county_id' => '2'  ],
            [ 'id' => 32, 'city' => 'Landimawe', 'county_id' => '2'  ],
            [ 'id' => 33, 'city' => 'Langata', 'county_id' => '2'  ],
            [ 'id' => 34, 'city' => 'Lavington', 'county_id' => '2'  ],
            [ 'id' => 35, 'city' => 'Lucky Summer', 'county_id' => '2'  ],
            [ 'id' => 36, 'city' => 'Makadara', 'county_id' => '2'  ],
            [ 'id' => 37, 'city' => 'Maringo', 'county_id' => '2'  ],
            [ 'id' => 38, 'city' => 'Mbagathi Way', 'county_id' => '2'  ],
            [ 'id' => 39, 'city' => 'Mombasa Road', 'county_id' => '2'  ],
            [ 'id' => 40, 'city' => 'Mountain View', 'county_id' => '2'  ],
            [ 'id' => 41, 'city' => 'Mowlem', 'county_id' => '2'  ],
            [ 'id' => 42, 'city' => 'Muthaiga', 'county_id' => '2'  ],
            [ 'id' => 43, 'city' => 'Mwiki', 'county_id' => '2'  ],
            [ 'id' => 44, 'city' => 'Nairobi South', 'county_id' => '2'  ],
            [ 'id' => 45, 'city' => 'Nairobi West', 'county_id' => '2'  ],
            [ 'id' => 46, 'city' => 'Njiru', 'county_id' => '2'  ],
            [ 'id' => 47, 'city' => 'Pangani', 'county_id' => '2'  ],
            [ 'id' => 48, 'city' => 'Parklands/Highridge', 'county_id' => '2'  ],
            [ 'id' => 49, 'city' => 'Pumwani', 'county_id' => '2'  ],
            [ 'id' => 50, 'city' => 'Ridgeways', 'county_id' => '2'  ],
            [ 'id' => 51, 'city' => 'Roysambu', 'county_id' => '2'  ],
            [ 'id' => 52, 'city' => 'Ruai', 'county_id' => '2'  ],
            [ 'id' => 53, 'city' => 'Ruaraka', 'county_id' => '2'  ],
            [ 'id' => 54, 'city' => 'Runda', 'county_id' => '2'  ],
            [ 'id' => 55, 'city' => 'Saika', 'county_id' => '2'  ],
            [ 'id' => 57, 'city' => 'South B', 'county_id' => '2'  ],
            [ 'id' => 58, 'city' => 'South C', 'county_id' => '2'  ],
            [ 'id' => 59, 'city' => 'Thome', 'county_id' => '2'  ],
            [ 'id' => 60, 'city' => 'Umoja', 'county_id' => '2'  ],
            [ 'id' => 61, 'city' => 'Upperhill', 'county_id' => '2'  ],
            [ 'id' => 62, 'city' => 'Utawala', 'county_id' => '2'  ],
            [ 'id' => 63, 'city' => 'Westlands', 'county_id' => '2'  ],
            [ 'id' => 64, 'city' => 'Woodley', 'county_id' => '2'  ],
            [ 'id' => 65, 'city' => 'Zimmerman', 'county_id' => '2'  ],

          
        
        
        ];

        City::insert($cities);
    }
}
