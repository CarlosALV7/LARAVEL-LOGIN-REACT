<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'razon_social' => null
                , 'name' => 'Benito Pablo'
                , 'primer_apellido' => 'Juárez'
                , 'segundo_apellido' => 'García'
                , 'fecha_nacimiento' => '1806-03-21'
                , 'sexo' => 'masculino'
                , 'email' => 'benito@mexico.mx'
                , 'perfil' => 'Administrador'
                , 'password' => bcrypt('12345678')
                , 'dias_visita' => null
                , 'estatus' => 'activo'
                , 'created_at' => '2022-02-26 09:29:00'
                , 'updated_at' => '2022-02-26 09:29:00'
            ],
            [
                'razon_social' => null
                , 'name' => 'Josue'
                , 'primer_apellido' => 'Pacheco'
                , 'segundo_apellido' => 'Chavez'
                , 'fecha_nacimiento' => '2000-12-07'
                , 'sexo' => 'masculino'
                , 'email' => 'josuecheco02@gmail.com'
                , 'perfil' => 'Administrador'
                , 'password' => bcrypt('12345678')
                , 'dias_visita' => null
                , 'estatus' => 'activo'
                , 'created_at' => '2022-02-26 09:29:00'
                , 'updated_at' => '2022-02-26 09:29:00'
            ]
        ]);
    }
}
