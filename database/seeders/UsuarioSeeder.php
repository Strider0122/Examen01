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
                
                [       "nombre"=>"Jerson Jesus Saavedra Neira",
                        "correo"=>"jjsn@gmail.com",
                        "usuario"=>"Jesus",
                        "password"=>"123456",
                        "foto"=>"https://www.latercera.com/resizer/1SH0kApRc3U2e5AZyFrsIMC-gFU=/arc-anglerfish-arc2-prod-copesa/public/2IZ6DSSORRHPZKZXABCGPXOMWE.jpg",
                        "estado"=>"true"
                ],
                [       "nombre"=>"Gustavo Enrique Piminchumo Olivos",
                        "correo"=>"gepo@gmail.com",
                        "usuario"=>"Gustavo",
                        "password"=>"123456",
                        "foto"=>"https://img.europapress.es/fotoweb/fotonoticia_20220720184850_420.jpg",
                        "estado"=>"true"
                ],
                [       "nombre"=>"Juan Carlos Quispe Quispe",
                        "correo"=>"jsqq@gmail.com",
                        "usuario"=>"Juan",
                        "password"=>"123456",
                        "foto"=>"https://img.europapress.es/fotoweb/fotonoticia_20220228142504_1200.jpg",
                        "estado"=>"true"
                ]
            ]

        ]);
    }
}
