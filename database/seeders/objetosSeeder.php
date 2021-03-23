<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\objetos;

class objetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #DB::table('objetos')->insert([
        #    'codigo' => 'inserte codigo que se mostrara aqui.',
        #   'descripcion'=> 'descripcion del codigo mostrado',
        #    'precio' => '0',
        #    'contenido' => '1',
        #]);

        objetos::create([
            'codigo' => 'inserte codigo que se pondra este lugar.',
            'descripcion'=> 'descripcion del codigo que se estara apunto de mostrar',
            'precio' => '5',
            'contenido' => '4',
        ]);
    }
}
