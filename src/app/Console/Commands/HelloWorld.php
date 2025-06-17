<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloWorld extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'www:hello-world';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Primo command da console di test';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo "Questo è il mio primo command\n";
        echo $this->miaFunzione() . "\n";


        $this->info("Questo è un testo prodotto dalla funzione info");
        $this->error("Questo è un testo prodotto dalla funzione error");
        $this->line("Questo è un testo prodotto dalla funzione error");


        $nome = $this->ask("Scrivi il tuo nome:");

        $this->info("Il nome che hai scritto è: " . $nome);

        $password = $this->secret("Inserisci la tua password");

        $this->error("La password che hai inserito è: " . $password);


    }


    public function miaFunzione(){
        return "Risultato della mia funzione";
    }
}
