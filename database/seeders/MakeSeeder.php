<?php

namespace Database\Seeders;

use App\Models\Carmake;
use Illuminate\Database\Seeder;

class MakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carmakes = [
            [
                'id'    => 1,
                'make' => 'Acura',
            ],
            [
                'id'    => 2,
                'make' => 'Alfa Romeo',
            ],
            [
                'id'    => 3,
                'make' => 'Audi',
            ],
            [
                'id'    => 4,
                'make' => 'Bentley',
            ],
            [
                'id'    => 5,
                'make' => 'BMW',
            ],
            [
                'id'    => 6,
                'make' => 'Cadillac',
            ],
            [
                'id'    => 7,
                'make' => 'Chevrolet',
            ],
            [
                'id'    => 8,
                'make' => 'chrysler',
            ],
            [
                'id'    => 9,
                'make' => 'Citroen',
            ],
            [
                'id'    => 10,
                'make' => 'Daewoo',
            ],
            [
                'id'    => 11,
                'make' => 'Daihatsu',
            ],
            [
                'id'    => 12,
                'make' => 'Datsun',
            ],
            [
                'id'    => 13,
                'make' => 'Dodge',
            ],
            [
                'id'    => 14,
                'make' => 'Dongfeng',
            ],
            [
                'id'    => 15,
                'make' => 'Fiat',
            ],
            [
                'id'    => 16,
                'make' => 'Ford',
            ],
            [
                'id'    => 17,
                'make' => 'Honda',
            ],
            [
                'id'    => 18,
                'make' => 'Hummer',
            ],
            [
                'id'    => 19,
                'make' => 'Hyundai',
            ],
            [
                'id'    => 20,
                'make' => 'Infiniti',
            ],
            [
                'id'    => 21,
                'make' => 'Isuzu',
            ],
            [
                'id'    => 22,
                'make' => 'Jaguar',
            ],
            [
                'id'    => 23,
                'make' => 'Jeep',
            ],
            [
                'id'    => 24,
                'make' => 'JMC',
            ],
            [
                'id'    => 25,
                'make' => 'Kia',
            ],
            [
                'id'    => 26,
                'make' => 'Land Rover',
            ],
            [
                'id'    => 27,
                'make' => 'Lexus',
            ],
            [
                'id'    => 28,
                'make' => 'Lincoln',
            ],
            [
                'id'    => 29,
                'make' => 'Mazda',
            ],
            [
                'id'    => 30,
                'make' => 'Mercedes Benz',
            ],
            [
                'id'    => 31,
                'make' => 'Mini',
            ],
            [
                'id'    => 32,
                'make' => 'Mitsubishi',
            ],
            
            [
                'id'    => 33,
                'make' => 'Nissan',
            ],
            [
                'id'    => 34,
                'make' => 'Peugeot',
            ],
            [
                'id'    => 35,
                'make' => 'Porsche',
            ],
            [
                'id'    => 36,
                'make' => 'Proton',
            ],
            [
                'id'    => 37,
                'make' => 'Renault',
            ],
            [
                'id'    => 38,
                'make' => 'Range Rover',
            ],
            [
                'id'    => 39,
                'make' => 'skoda',
            ],
            [
                'id'    => 40,
                'make' => 'Subaru',
            ],
            [
                'id'    => 41,
                'make' => 'Suzuki',
            ],
            [
                'id'    => 42,
                'make' => 'Toyota',
            ],
            [
                'id'    => 43,
                'make' => 'Volkswagen',
            ],
            [
                'id'    => 44,
                'make' => 'Volvo',
            ],

        ];

        Carmake::insert($carmakes);    }
}
