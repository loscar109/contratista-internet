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
            'codigo_tecnico' => '99BCC220',
            'dni' => "18982734",
            'nombre' => "Marcelo",
            'apellido' => "Martinez"

        ]);

        Empleado::create([
            'codigo_tecnico' => '99BCC220',
            'dni' => "22987564",
            'nombre' => "Lucas",
            'apellido' => "Reyes"

        ]);
    }
}
