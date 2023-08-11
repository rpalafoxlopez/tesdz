<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CalificacionesModel;
use App\Models\SalonesModel;

class Promedios extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'promedios {salon}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Muestra los mejores Promedios';

    /**
     * Execute the console command.
     */
    public function handle()
    {
    }
}
