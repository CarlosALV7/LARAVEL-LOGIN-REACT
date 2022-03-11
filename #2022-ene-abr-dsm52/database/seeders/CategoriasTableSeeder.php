<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['categoria' => 'Mantenimiento', 'estatus' => 'activa']
            , ['categoria' => 'Instalacion de S.O.', 'estatus' => 'activa']
            , ['categoria' => 'Intalacion de software', 'estatus' => 'activa']
            , ['categoria' => 'Mejora de equipo', 'estatus' => 'activa']
            , ['categoria' => 'Piezas', 'estatus' => 'activa']
        ]);
    }
}
