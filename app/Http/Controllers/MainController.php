<?php

namespace App\Http\Controllers;

use App\Models\CalificacionesModel;
use App\Models\SalonesModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $salones = SalonesModel::all();
        $promedios = [];
        foreach ($salones as $salon) {
            $promedios[] = $salon->mejorPromedio();
        }

        dd($promedios);
    }
}