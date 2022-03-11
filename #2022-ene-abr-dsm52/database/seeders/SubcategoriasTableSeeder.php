<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategorias')->insert([
            ['categoria_id' => 1, 'subcategoria' => 'Limpieza de teclado', 'estatus' => 'activa']
            , ['categoria_id' => 1, 'subcategoria' => 'Limpieza de tarjeta madre', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'Windows 7, 8, 9, 10, 11', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'Linux Fedora, Kali, Ubuntu, Debian', 'estatus' => 'activa']
            , ['categoria_id' => 2, 'subcategoria' => 'Mac Catalina', 'estatus' => 'activa']
            , ['categoria_id' => 3, 'subcategoria' => 'Paqueteria Office, libreOficce', 'estatus' => 'activa']
            , ['categoria_id' => 3, 'subcategoria' => 'Software gral.', 'estatus' => 'activa']
            , ['categoria_id' => 4, 'subcategoria' => 'RAM', 'estatus' => 'activa']
            , ['categoria_id' => 4, 'subcategoria' => 'ROM', 'estatus' => 'activa']
            , ['categoria_id' => 4, 'subcategoria' => 'Tarjeta de video', 'estatus' => 'activa']
            , ['categoria_id' => 4, 'subcategoria' => 'Procesador', 'estatus' => 'activa']
            , ['categoria_id' => 4, 'subcategoria' => 'Fuente de poder', 'estatus' => 'activa']
            , ['categoria_id' => 4, 'subcategoria' => 'Disipador', 'estatus' => 'activa']
        ]);
    }
}
