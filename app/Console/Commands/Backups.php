<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class Backups extends Command
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
    protected $description = 'Backup Database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Backup Database');
        // create backup folder and timestamp folder the move mysql-schema.dump to backup folder
        File::makeDirectory('backup', 0777, true, true);
        $timestamp = date('Y-m-d_H-i-s');
        File::makeDirectory('database/backup/' . $timestamp, 0777, true, true);
        File::move('database/schema/mysql-schema.dump', 'database/backup/' . $timestamp . '/mysql-schema.dump');
        // create backup file
        $backupFile = 'database/schema/mysql-schema.dump';
        $command = 'mysqldump --user=' . env('DB_USERNAME') . ' --password=' . env('DB_PASSWORD') . ' --host=' . env('DB_HOST') . ' ' . env('DB_DATABASE') . ' > ' . $backupFile;
        $returnVar = NULL;
        $output = NULL;
        exec($command, $output, $returnVar);
        $this->info('Backup Database Success');
        return Command::SUCCESS;
    }
}
