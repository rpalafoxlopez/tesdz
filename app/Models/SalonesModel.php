<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class SalonesModel extends Model
{
    use HasFactory;

    protected $table = 'salones';

    public function asignados(): BelongsToMany
    {
        return $this->belongsToMany(AsignacionSalonesModel::class, 'asignacion_salones', 'id_salon', 'id', 'salones');
    }

    public function alumnos()
    {
        $alumnos = [];
        $alumnosasignados = AsignacionSalonesModel::where("model_type", "=", "App\\Models\\AlumnosModel")->where("id_salon", "=", $this->id)->get();
        foreach ($alumnosasignados as $alumno) {
            $alumno->alumnoDatos = AlumnosModel::find($alumno->model_id);
            $alumno->promedio = $alumno->alumnoDatos->promedio();
        }

        return $alumnosasignados;
    }

    public function mejorPromedio()
    {
        $alumnos = $this->alumnos();
        // dd($alumnos);
        $mejoresPromedios = collect();
        $data = [];
        foreach ($alumnos as $alumno) {

            if ($alumno->promedio->promedio != null) {
                $data[] = [
                    "full_name" => $alumno->alumnoDatos->name . ' ' . $alumno->alumnoDatos->last_name,
                    "promedio" => $alumno->promedio->promedio
                ];
            }
        }
        $nombres = collect($data);
        $nombres = $nombres->sortByDesc("promedio");

        $mejoresPromedios = collect(array(
            "salonName" => $this->name,
            "mejoresPromedios" => $nombres
        ));

        return $mejoresPromedios;
    }
}
