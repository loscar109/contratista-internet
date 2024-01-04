<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipo;


class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipo::create(['mac' => 'PAER0073476','categoria_equipos_id' => 1]);
        Equipo::create(['mac' => 'HP44H23200193682','categoria_equipos_id' => 1]);
        Equipo::create(['mac' => 'ALCLB412744A','categoria_equipos_id' => 2]);
        Equipo::create(['mac' => 'M90738FG4102','categoria_equipos_id' => 4]);
        Equipo::create(['mac' => 'CDV220533623','categoria_equipos_id' => 5]);



    }
}
