<?php

/**
 * Questo command serve per sperimentare l'utilizzo del Model direttamente da terminale
 * Includeremo il Model direttamente in questa classe
 * Utilizzeremo il model creando nuove istanze, chiedendo all'utente di inserire dalla tastiera 
 * il nome di un frutto e salvado il dato inserito direttamente nel database
 * 
 * In questo modo abbiamo una prima esperienza della potenza di utilizzo di un framework anche
 * per il lavoro che viene svolto da terminale.
 * 
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Fruit;

class Fruits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'www:add:fruit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command per sperimentare il model Fruit direttamente da terminale';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $nomeFrutto = $this->ask("Inserisci il nome di un frutto");

        $f = new Fruit();
        $f->name = $nomeFrutto;
        $f->save();

        $this->info("Il frutto " . $nomeFrutto . " è stato inserito nel database");

    }
}
