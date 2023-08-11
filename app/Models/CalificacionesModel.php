<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalificacionesModel extends Model
{
    use HasFactory;

    protected $table = 'calificaciones';
    protected $foreignkey = 'alumno_id';
    protected $fillable = ['promedio', 'alumno_id'];

    public function alumno(): BelongsTo
    {
        return $this->belongsTo(AlumnosModel::class);
    }
}
