<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\Csv\Reader;
use App\Models\Song;

class CsvTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'www:app:csv-test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command di test con la libreria league csv';


    public function getExplicitBoolean($value){
        if($value == "No")
            return false;
        else
            return true;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        $fileCsv = storage_path('app/spotify_songs_restrict.csv');
        
        if($fileCsv)
            $this->info("path corretto");
        else
            $this->error("path errato");

        $csv = Reader::createFromPath($fileCsv, 'r');

        $csv->setHeaderOffset(0);

        $header = $csv->getHeader(); //returns the CSV header record
        $records = $csv->getRecords(); // an Iterator object containing arrays

        foreach($records as $record){
            $this->info($record['song']);
            /**
             *  1. creazione di un'istanza di Song
             *  2. assegnazione alle variabili dell'istanza dei dati recuperati dall'array $record
             *  3. salvataggio dell'istanza nel database
             */
             $s = new Song();
             $s->song = $record['song'];
             $s->artist = $record['artist'];
             $s->emotion = $record['emotion'];
             $s->variance = $record['variance'];
             $s->genre = $record['Genre'];
             $s->release_date = $record['Release Date'];
             $s->key = $record['Key'];
             $s->tempo = $record['Tempo'];
             $s->loudness = $record['Loudness'];
             $s->explicit = $this->getExplicitBoolean($record['Explicit']);
             $s->popularity = $record['Popularity'];
             $s->energy = $record['Energy'];
             $s->danceability = $record['Danceability'];
             $s->positiveness = $record['Positiveness'];
             $s->speechiness = $record['Speechiness'];
             $s->liveness = $record['Liveness'];
             $s->scousticness = $record['Acousticness'];
             $s->instrumentalness = $record['Instrumentalness'];
             
             $s->save();
             
             /*  Per far sì che funzioni bisogna fare:
             *  
             *  - Creare il Model Song con la sua migration
             *  - Adattare la migration in modo che possa creare una tabella con tutte le colonne del csv
             *      (fare molta attenzione ai tipi di dati)
             *  - Eseguire la migration
             *  - Scommentare il codice dalle righe 51 - 57, aggiungendo le mancanti
             *  - Eseguire il command
             *  
             * 
             * 
             */
        }

        
    }
}
