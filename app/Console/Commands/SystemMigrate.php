<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;

class SystemMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:migrate
                            {--all : Migrate all tenancies databases.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate system database';

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
        //
        if ($this->option('all')) {
            Config::set('site.id', false);
            $exits = [];
            $sites = config('domains');
            foreach ($sites as $site) {

                if ($site['id'] == 1) {
                    $exitCode = Artisan::call('system:migrate');
                    if ($exitCode == 0) {
                        $exitCodes[] = 'System site successfuly migrated!';
                    }

                    if ($exitCode == 1) {
                        $exitCodes[] = 'System site not migrated!';
                    }

                    continue;
                }

                $exitCode = Artisan::call('migrate', [
                    '--database' => $site['id'],
                ]);

                if ($exitCode == 0) {
                    $exitCodes[] = 'Site ID ' . $site['id'] . ' successfuly migrated!';
                }

                if ($exitCode == 1) {
                    $exitCodes[] = 'Site ID ' . $site['id'] . ' not migrated!';
                }
            }

            $info = '';
            foreach ($exitCodes as $exitCode) {
                $info .= $exitCode . PHP_EOL;
            }

            return dd($info);
        }

        Config::set('site.id', 1);

        $exitCode = Artisan::call('migrate');

        if ($exitCode == 0) {
            return $this->info('System site successfuly migrated!');
        }

        if ($exitCode == 1) {
            return $this->error('System site not migrated!');
        }
    }
}
