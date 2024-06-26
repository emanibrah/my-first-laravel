<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
class DatabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automating Daily Backups';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       
        $filename = Carbon::now()->format('Y-m-d') .".sql";
        $command = "mysqldump --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD')
        . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE')  . " > " . storage_path() . "/app/backup/" . $filename;
        exec($command);
        
    }
}

