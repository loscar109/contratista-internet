<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoriaTrabajo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoriaEquipoSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(CategoriaTrabajoSeeder::class);
        $this->call(GrupoTrabajoSeeder::class);
        $this->call(EmpleadoGrupoSeeder::class);

    }
}
