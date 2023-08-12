<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('promedios', function () {
    $this->comment("Estos son los mejores promedios por Salon:");
    $salones = App\Models\SalonesModel::all();
    $promedios = [];
    foreach ($salones as $salon) {
        $this->comment("Salon: " . $salon->name);
        $mProm = $salon->mejorPromedio();

        foreach ($mProm["mejoresPromedios"] as $prom) {
            $this->comment("Alumno: " . $prom["full_name"] . " |  Promedio: " . $prom["promedio"]);
        }
    }
})->purpose('Muestra los mejores Promedios');


Artisan::command('promediosbysalon/{id_salon}', function (int $id_salon) {
    $salon = App\Models\SalonesModel::find($id_salon);
    $this->comment("Estos son los mejores promedios del Salon: " .  $salon->name);
    $mProm = $salon->mejorPromedio();
    foreach ($mProm["mejoresPromedios"] as $prom) {
        $this->comment("Alumno: " . $prom["full_name"] . " |  Promedio: " . $prom["promedio"]);
    }
})->purpose('Muestra los mejores Promedios de un salon especificado');
