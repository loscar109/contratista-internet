<?php

namespace App\Livewire\Vehiculos;

use Livewire\Component;
use App\Models\Vehiculo;
class MostrarVehiculos extends Component
{

    //public $search = "Esto es lo que se buscará";
    public $search;

    public function render()
    {
        //$vehiculos = Vehiculo::all();

        $vehiculos = Vehiculo::where('patente','like','%' . $this->search . '%')
        ->orWhere('marca','like','%' . $this->search . '%')
        ->orWhere('modelo','like','%' . $this->search . '%')
        ->get();
        return view('livewire.vehiculos.mostrar-vehiculos', compact('vehiculos'));
    }
}
