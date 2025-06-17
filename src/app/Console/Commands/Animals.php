<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Animal;

class Animals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'www:add:animals';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command per l\'inserimento di un animale alla volta da terminale';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $nomeAnimale = $this->ask("Inserisci il nome dell'animale da inserire");
        
        $a = new Animal();
        $a->name = $nomeAnimale;
        $a->save();

        $this->info("Lì'animale: " . $nomeAnimale . " è stato inserito nel database");
    }
}
