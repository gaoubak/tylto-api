<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class uploadApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manga:show {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Recupère et stock une ligne depuis l'API ";

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $idmanga = $this->argument('id');
        $result = Http::get('http://127.0.0.1:8000/api/posts/'.$idmanga);
        $randomFileName = $idmanga.time().'.txt';
        $path = Storage::disk('public')->put($randomFileName, $result);
        $this->info('Le resultat a été stocké dans le repertoire storage/app/public sous le nom : '.$randomFileName); 
    }
}
