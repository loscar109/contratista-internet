<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EntregaEquipo;


class EntregaEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EntregaEquipo::create([
            'fecha' => '2023-08-05',
            'grupo_trabajo_id' => 1 ,
            'equipo_id' => 1,
        ]);

        EntregaEquipo::create([
            'fecha' => '2023-08-05',
            'grupo_trabajo_id' => 1 ,
            'equipo_id' => 2,
        ]);

        EntregaEquipo::create([
            'fecha' => '2023-08-05',
            'grupo_trabajo_id' => 1 ,
            'equipo_id' => 3,
        ]);

        EntregaEquipo::create([
            'fecha' => '2023-08-05',
            'grupo_trabajo_id' => 1 ,
            'equipo_id' => 4,
        ]);

        EntregaEquipo::create([
            'fecha' => '2023-08-05',
            'grupo_trabajo_id' => 1 ,
            'equipo_id' => 5,
        ]);

    }
}
