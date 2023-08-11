<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class m extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            /*

    >afterMaking(\App\Models\CalificacionesModel::class, function ($alumno, $faker) {
      return [
        'promedio' => $faker->randomFloat(1, 6, 10),
        'alumno_id' => $alumnos->id,
      ];
    });
   ->each(function ($alumno) {
      $alumno->calificaciones()->associate(\App\Models\CalificacionesModel::inRandomOrder()->first());
      //\App\Models\CalificacionesModel::factory()->forAlumno()->create();
    });

    $alumnos->calificaciones()->save()->factory(\App\Models\CalificacionesModel::class, 1);

          \App\Models\CalificacionesModel::factory(10)->create();
      $alumnos->calificaciones()->associate(\App\Models\CalificacionesModel::inRandomOrder()->first());
    \App\Models\MaestrosModel::factory(20)->create();
    \App\Models\CalificacionesModel::factory(10)->create();
    \App\Models\SalonesModel::factory(10)->create();
    \App\Models\DireccionesModel::factory(10)->create();
    \App\Models\DireccionesModel::factory(10)->forAlumnos()->create();
    \App\Models\AsignacionSalonesModel::factory(20)->create();
    \App\Models\AsignacionSalonesModel::factory(10)->forAlumnos()->create();

    \App\Models\CalificacionesModel::factory()->count()
      ->for(\App\Models\AlumnosModel::factory()->hasSalon()->hasDireccion()->create())
      ->create();

   \App\Models\AlumnosModel::factory(10)->hasCalificaciones(1)->create();

    */

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
    //\App\Models\CalificacionesModel::factory()->forAlumno()->create();
    //$alumno->calificaciones()->associate(\App\Models\CalificacionesModel::inRandomOrder()->first());
    //\App\Models\CalificacionesModel::factory()->forAlumno()->create();

    }
}