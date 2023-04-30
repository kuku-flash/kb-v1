<?php

namespace Database\Seeders;

use App\Models\County;
use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counties = [
            [
                'id'    => 1,
                'county' => 'Mombasa',
                'country' => 'Kenya',
            ],
            [
                'id'    => 2,
                'county' => 'Nairobi',
                'country' => 'Kenya',
            ],
            [
                'id'    => 3,
                'county' => 'Kwale',
                'country' => 'Kenya',
            ],
            [
                'id'    => 4,
                'county' => 'Kilifi',
                'country' => 'Kenya',
            ],
            [
                'id'    => 5,
                'county' => 'Tana River',
                'country' => 'Kenya',
            ],
            [
                'id'    => 6,
                'county' => 'Lamu',
                'country' => 'Kenya',
            ],
            [
                'id'    => 7,
                'county' => 'Taita Mak Taveta',
                'country' => 'Kenya',
            ],
            [
                'id'    => 8,
                'county' => 'Garissa',
                'country' => 'Kenya',
            ],
            [
                'id'    => 9,
                'county' => 'Wajir',
                'country' => 'Kenya',
            ],
            [
                'id'    => 10,
                'county' => 'Mandera',
                'country' => 'Kenya',
            ],
            [
                'id'    => 11,
                'county' => 'Isiolo',
                'country' => 'Kenya',
            ],
            [
                'id'    => 12,
                'county' => 'Meru',
                'country' => 'Kenya',
            ],
            [
                'id'    => 13,
                'county' => 'Embu',
                'country' => 'Kenya',
            ],
            [
                'id'    => 14,
                'county' => 'Kitui',
                'country' => 'Kenya',
            ],
            [
                'id'    => 15,
                'county' => 'Machakos',
                'country' => 'Kenya',
            ],
            [
                'id'    => 16,
                'county' => 'Makueni',
                'country' => 'Kenya',
            ],
            [
                'id'    => 17,
                'county' => 'Nyandarua',
                'country' => 'Kenya',
            ],
            [
                'id'    => 18,
                'county' => 'Nyeri',
                'country' => 'Kenya',
            ],
            [
                'id'    => 19,
                'county' => 'Kirinyaga',
                'country' => 'Kenya',
            ],
            [
                'id'    => 20,
                'county' => 'Murang’a',
                'country' => 'Kenya',
            ],
            [
                'id'    => 21,
                'county' => 'Kiambu',
                'country' => 'Kenya',
            ],
            [
                'id'    => 22,
                'county' => 'Turkana',
                'country' => 'Kenya',
            ],
            [
                'id'    => 23,
                'county' => 'West Pokot',
                'country' => 'Kenya',
            ],
            [
                'id'    => 24,
                'county' => 'Samburu',
                'country' => 'Kenya',
            ],
            [
                'id'    => 25,
                'county' => 'Trans-Nzoia',
                'country' => 'Kenya',
            ],
            [
                'id'    => 26,
                'county' => 'Uasin Gishu',
                'country' => 'Kenya',
            ],
            [
                'id'    => 27,
                'county' => 'Elgeyo-Marakwet',
                'country' => 'Kenya',
            ],
            [
                'id'    => 28,
                'county' => 'Nandi',
                'country' => 'Kenya',
            ],
            [
                'id'    => 29,
                'county' => 'Baringo',
                'country' => 'Kenya',
            ],
            [
                'id'    => 30,
                'county' => 'Laikipia',
                'country' => 'Kenya',
            ],
            [
                'id'    => 31,
                'county' => 'Nakuru',
                'country' => 'Kenya',
            ],
            [
                'id'    => 32,
                'county' => 'Narok',
                'country' => 'Kenya',
            ],
            [
                'id'    => 33,
                'county' => 'Kajiado',
                'country' => 'Kenya',
            ],
            [
                'id'    => 34,
                'county' => 'Kericho',
                'country' => 'Kenya',
            ],
            [
                'id'    => 35,
                'county' => 'Bomet',
                'country' => 'Kenya',
            ],
            [
                'id'    => 36,
                'county' => 'Kakamega',
                'country' => 'Kenya',
            ],
            [
                'id'    => 37,
                'county' => 'Vihiga',
                'country' => 'Kenya',
            ],
            [
                'id'    => 38,
                'county' => 'Bungoma',
                'country' => 'Kenya',
            ],
            [
                'id'    => 39,
                'county' => 'Busia',
                'country' => 'Kenya',
            ],
            [
                'id'    => 40,
                'county' => 'Siaya',
                'country' => 'Kenya',
            ],
            [
                'id'    => 41,
                'county' => 'Kisumu',
                'country' => 'Kenya',
            ],
            [
                'id'    => 42,
                'county' => 'Homa Bay',
                'country' => 'Kenya',
            ],
            [
                'id'    => 43,
                'county' => 'Migori',
                'country' => 'Kenya',
            ],
            [
                'id'    => 44,
                'county' => 'Kisii',
                'country' => 'Kenya',
            ],
            [
                'id'    => 45,
                'county' => 'Nyamira',
                'country' => 'Kenya',
            ],
   
        
        ];

        County::insert($counties);
    }
}
