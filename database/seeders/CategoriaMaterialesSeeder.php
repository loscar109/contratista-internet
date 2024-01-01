<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoriaMateriales;

class CategoriaMaterialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoriaMateriales::create(['nombre' => 'Cables']);
        CategoriaMateriales::create(['nombre' => 'Nomecladores']);
        CategoriaMateriales::create(['nombre' => 'Nomecladores']);

    }
}
