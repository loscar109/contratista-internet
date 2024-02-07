<?php

namespace App\Livewire\Vehiculos;

use Livewire\Component;
use App\Models\Vehiculo;
class MostrarVehiculos extends Component
{

    //public $search = "Esto es lo que se buscará";
    public $search;
    public $sort = 'id';
    public $direction = 'desc';

    public function render()
    {
        //$vehiculos = Vehiculo::all();

        $vehiculos = Vehiculo::where('patente','like','%' . $this->search . '%')
        ->orWhere('marca','like','%' . $this->search . '%')
        ->orWhere('modelo','like','%' . $this->search . '%')
        ->orderBy($this->sort, $this->direction)
        ->get();
        return view('livewire.vehiculos.mostrar-vehiculos', compact('vehiculos'));
    }

    public function order($sort)
    {
        if ($this->sort==$sort) 
        {
            if ($this->direction=='desc')
            {
                $this->direction='asc';
            } 
            else 
            {
                $this->direction='asc';
            }
        } 
        else 
        {
            $this->sort=$sort;        
        }
        
        
    }
}
