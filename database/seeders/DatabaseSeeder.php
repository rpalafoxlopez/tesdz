<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use App\Models\CalificacionesModel;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();


        \App\Models\SalonesModel::factory(5)->create();
        \App\Models\AlumnosModel::factory(50)->hasSalon()->hasDireccion()->create()->each(function ($alumno) use ($faker) {
            $alumno->calificaciones()->associate(
                CalificacionesModel::create([
                    'promedio' => $faker->randomFloat(1, 8, 10),
                    'alumno_id' => $alumno->id,
                ])
            );
        });
        \App\Models\MaestrosModel::factory(5)->hasSalon()->hasDireccion()->create();
    }
}
