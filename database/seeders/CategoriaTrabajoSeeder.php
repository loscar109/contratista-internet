<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaTrabajo;

class CategoriaTrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoriaTrabajo::create(['nombre' => 'Instalación','descripcion' => "Tarea que se ecarga de instalar Deco Full HD y otros"]);
        CategoriaTrabajo::create(['nombre' => 'Desconexión','descripcion' => "Tarea que se ecarga de dar de baja el servicio contratado"]);
        CategoriaTrabajo::create(['nombre' => 'Reinstalación','descripcion' => "Tarea que se ecarga de reactivar el servicio"]);
        CategoriaTrabajo::create(['nombre' => 'Service','descripcion' => "Tarea que se ecarga de realizar service domiciliario"]);

    }
}
