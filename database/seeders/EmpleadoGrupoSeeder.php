<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmpleadoGrupo;


class EmpleadoGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmpleadoGrupo::create([
            'empleado_id' => 1,
            'grupo_trabajos_id' => 1,
        ]);

        EmpleadoGrupo::create([
            'empleado_id' => 2,
            'grupo_trabajos_id' => 1,
        ]);


    }
}
