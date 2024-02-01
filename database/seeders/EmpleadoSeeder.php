<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;


class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empleado::create([
            'codigo_tecnico' => '200',
            'dni' => "18982734",
            'nombre' => "Patrón",
            'apellido' => "Gutierres",
            'foto_perfil' => "emp1.png",
            'nacimiento' => "1974-08-12"
        ]);

        Empleado::create([
            'codigo_tecnico' => '226',
            'dni' => "28982734",
            'nombre' => "Francisco",
            'apellido' => "Gimenez",
            'foto_perfil' => "emp2.png",
            'nacimiento' => "1985-07-13"
        ]);


        Empleado::create([
            'codigo_tecnico' => '226',
            'dni' => "28922734",
            'nombre' => "Richard",
            'apellido' => "Stier",
            'foto_perfil' => "emp3.png",
            'nacimiento' => "1982-01-22"
        ]);


        Empleado::create([
            'codigo_tecnico' => '205',
            'dni' => "29921724",
            'nombre' => "Hipólito",
            'apellido' => "Steven",
            'foto_perfil' => "emp4.png",
            'nacimiento' => "1979-05-17"
        ]);


        Empleado::create([
            'codigo_tecnico' => '201',
            'dni' => "32921574",
            'nombre' => "Carlos",
            'apellido' => "Roman",
            'foto_perfil' => "emp5.png",
            'nacimiento' => "1988-01-29"
        ]);
    }
}
