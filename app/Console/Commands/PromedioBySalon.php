<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PromedioBySalon extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'promediobysalon {id_salon}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dd($id_salon);
        //
    }
}
