<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoGrupo extends Model
{
    use HasFactory;

    protected $fillable = ['empleado_id','grupo_trabajos_id'];

}
