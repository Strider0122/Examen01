<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::insert([
            [
                'nombre' => "YISUS MUERE",
                'correo' => 'YISUS_NEL2@gmail.com',
                'usuario' => "YISUS2",
                'password' => "123456",
                'foto' => "Ni ideas :V",
                'estado' => "TRUE",
            ],

            [
                'nombre' => "YISUS MUERE2",
                'correo' => 'YISUS_NEL3@gmail.com',
                'usuario' => "YISUS3",
                'password' => "12345678",
                'foto' => "Ni ideas :V",
                'estado' => "TRUE",
            ],

            [
                'nombre' => "YISUS MUERE3",
                'correo' => 'YISUS_NEL4@gmail.com',
                'usuario' => "YISUS4",
                'password' => "1234567",
                'foto' => "Ni ideas :V",
                'estado' => "TRUE",
            ],

        ]);
    }
}
