<?php

namespace MachineManagementApp\Console\Commands;

use Illuminate\Http\File;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class SensorEventCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sensor:event';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $result = File::makeDirectory('/path/to/directory', 0775, true);
        // Storage::makeDirectory("/var/www/html/batata");
        Storage::makeDirectory('/var/www/html/batata', 0775, true);
        $this->info('Example Cron comando rodando com êxito');
    }
}
