<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editorial = [
            [
                'nombre' => 'Norma',
                'direccion' => 'Av. El Dorado 90-10',
                'ciudad' => 'Bogotá',
                'telefono' => '426652',
            ],
            [
                'nombre' => 'Mc Graw Hill',
                'direccion' => 'Carrera 85 k #46a-66',
                'ciudad' => 'Bogotá',
                'telefono' => '3102266',
            ],
            [
                'nombre' => 'Alfaomega Colombiana',
                'direccion' => 'Cl. 62 # 20 - 46',
                'ciudad' => 'Bogotá',
                'telefono' => '485210',
            ],
            [
                'nombre' => 'Los Tres Editores S.A.S.',
                'direccion' => 'Cl. 32 # 8a - 95',
                'ciudad' => 'Cali',
                'telefono' => '125520',
            ],
            [
                'nombre' => 'La Santillana',
                'direccion' => 'Cra. 82 #11241 N 33AA',
                'ciudad' => 'Medellín',
                'telefono' => '700022',
            ],
        ];
        DB::table('editorial')->insert($editorial);
    }
}
