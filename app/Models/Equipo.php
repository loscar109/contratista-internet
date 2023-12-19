<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['mac', 'categoria_id'];


    public function categoriaEquipos()
    {
        return $this->belongsTo('contratista\CategoriaEquipo');
    }


}
