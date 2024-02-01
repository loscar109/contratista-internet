<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;


class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehiculo::create([
            'patente' => "OOH634",
            'marca' => "Peugeot",
            'modelo' => "Partner"
        ]);
        Vehiculo::create([
            'patente' => "AAH614",
            'marca' => "Citroen",
            'modelo' => "Berlingo"
        ]);
        Vehiculo::create([
            'patente' => "ACJ872",
            'marca' => "Renault",
            'modelo' => "Kangoo"
        ]);
        Vehiculo::create([
            'patente' => "DCC842",
            'marca' => "Fiat",
            'modelo' => "Fiorino"
        ]);
    }
}
