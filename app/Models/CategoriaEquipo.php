<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaEquipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion'];


    public function Equipos()
    {
        return $this->belongsTo('contratista\Equipo');
    }
}
