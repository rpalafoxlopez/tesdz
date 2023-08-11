<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class AsignacionSalonesModel extends Model
{
    use HasFactory;

    protected $table = "asignacion_salones";
    protected $foreignkey = 'id_salon';
    protected $fillable = ['model_id', 'model_type'];

    public function model()
    {
        return $this->morphTo();
    }

    public function alumnos(): Collection
    {
        $alumnos = AsignacionSalonesModel::where("model_type", "=", "App\\Models\\AlumnosModel")->get();

        foreach ($alumnos as $alumno) {
            $alumno->alumnoDatos = AlumnosModel::find($alumno->model_id);
        }

        return $alumnos;
    }
}
