<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntregaEquipo extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'grupo_trabajo_id', 'equipo_id'];

}
