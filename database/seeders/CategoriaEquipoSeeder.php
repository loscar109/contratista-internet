<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaEquipo;

class CategoriaEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoriaEquipo::create(['nombre' => 'HD','descripcion' => 'Equipo que sirve para deodificar canales a partir de 720p']);
        CategoriaEquipo::create(['nombre' => 'WIFI','descripcion' => 'Equipo para conectarse a internet']);
        CategoriaEquipo::create(['nombre' => 'CM','descripcion' => 'CableModem para sistemas de conexión a internet antiguos']);
        CategoriaEquipo::create(['nombre' => 'DCT','descripcion' => 'Equipo antiguo para decodificar canales a 480p']);
        CategoriaEquipo::create(['nombre' => 'ISDBT','descripcion' => 'Equipo destinado a la transmisión de radio digital y televisión digital']);

    }
}
