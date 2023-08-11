<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlumnosModel extends Model
{
    use HasFactory;

    protected $table = 'alumnos';

    public function direccion(): MorphOne
    {
        return $this->morphOne('App\Models\DireccionesModel', 'model');
    }

    public function salon(): MorphMany
    {
        return $this->morphMany('App\Models\AsignacionSalonesModel', 'model');
    }


    public function calificaciones(): BelongsTo
    {
        return $this->belongsTo(CalificacionesModel::class, 'alumno_id', 'id');
    }

    public function promedio()
    {
        return CalificacionesModel::where("alumno_id", "=", $this->id)->first();
    }
}
