<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class MaestrosModel extends Model
{
    use HasFactory;

    protected $table = 'maestros';

    public function direccion(): MorphOne
    {
        return $this->morphOne('App\Models\DireccionesModel', 'model');
    }

    public function salon(): MorphMany
    {
        return $this->morphMany('App\Models\AsignacionSalonesModel', 'model');
    }
}
