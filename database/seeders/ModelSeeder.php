<?php

namespace Database\Seeders;

use App\Models\Carmodel;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carmodels = [
            //Acura make
            [ 'id' => 1, 'model' => 'ILX',  'make_id' => 1, ], 
            [ 'id' => 2, 'model' => 'Integra',  'make_id' => 1, ],
            [ 'id' => 3, 'model' => 'MDX',  'make_id' => 1, ],
            [ 'id' => 4, 'model' => 'RDX',  'make_id' => 1, ],
            [ 'id' => 5, 'model' => 'TLX',  'make_id' => 1, ],
            //Afla make
            [ 'id' => 6, 'model' => 'Tonale',  'make_id' => 2, ],
            //Audi make
            [ 'id' => 7, 'model' => 'A3',  'make_id' => 3, ],
            [ 'id' => 8, 'model' => 'A4',  'make_id' => 3, ],
            [ 'id' => 9, 'model' => 'A5',  'make_id' => 3, ],
            [ 'id' => 10, 'model' => 'A7',  'make_id' => 3, ],
            [ 'id' => 11, 'model' => 'e-tron',  'make_id' => 3, ],
            [ 'id' => 12, 'model' => 'Q3',  'make_id' => 3, ],
            [ 'id' => 13, 'model' => 'Q5',  'make_id' => 3, ],
            [ 'id' => 14, 'model' => 'Q7',  'make_id' => 3, ],
            [ 'id' => 15, 'model' => 'TT',  'make_id' => 3, ],
            //Bentley make_id 4

            //BMW make_id 5
            [ 'id' => 16, 'model' => '2 Series',  'make_id' => 5, ],
            [ 'id' => 17, 'model' => '3 Series',  'make_id' => 5, ],
            [ 'id' => 18, 'model' => '4 Series',  'make_id' => 5, ],
            [ 'id' => 19, 'model' => '5 Series',  'make_id' => 5, ],
            [ 'id' => 20, 'model' => '7 Series',  'make_id' => 5, ],
            [ 'id' => 21, 'model' => '8 Series',  'make_id' => 5, ],
            [ 'id' => 22, 'model' => 'i4',  'make_id' => 5, ],
            [ 'id' => 23, 'model' => 'iX',  'make_id' => 5, ],
            [ 'id' => 24, 'model' => 'M8',  'make_id' => 5, ],
            [ 'id' => 25, 'model' => 'X1',  'make_id' => 5, ],
            [ 'id' => 26, 'model' => 'X2',  'make_id' => 5, ],
            [ 'id' => 27, 'model' => 'X3',  'make_id' => 5, ],
            [ 'id' => 28, 'model' => 'X4',  'make_id' => 5, ],
            [ 'id' => 29, 'model' => 'X5',  'make_id' => 5, ],
            [ 'id' => 30, 'model' => 'X6',  'make_id' => 5, ],
            [ 'id' => 31, 'model' => 'X7',  'make_id' => 5, ],

        
        ];

        Carmodel::insert($carmodels);
    }
}
