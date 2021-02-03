<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro = [
            [
                'ISBN' => '12345',
                'titulo' => 'Don Quijote de la Mancha',
                'precio' => '20000',
                'stock' => '5',
                'id_editorial' => '1',
            ],
            [
                'ISBN' => '23456',
                'titulo' => 'Cien años de soledad',
                'precio' => '15000',
                'stock' => '10',
                'id_editorial' => '2',
            ],
            [
                'ISBN' => '34567',
                'titulo' => 'El principito',
                'precio' => '10000',
                'stock' => '15',
                'id_editorial' => '3',
            ],
            [
                'ISBN' => '45678',
                'titulo' => 'La Odisea ',
                'precio' => '25000',
                'stock' => '10',
                'id_editorial' => '4',
            ],
            [
                'ISBN' => '56789',
                'titulo' => 'La Divina Comedia',
                'precio' => '17000',
                'stock' => '6',
                'id_editorial' => '5',
            ],            
        ];
        DB::table('libro')->insert($libro);
    }
}
