<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan;

class SystemMigrateRefresh extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:migrate:refresh
                            {--all : Refresh all tenancies databases.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh system database';

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
                    $exitCode = Artisan::call('system:migrate:refresh');
                    if ($exitCode == 0) {
                        $exitCodes[] = 'System site successfuly refreshed!';
                    }

                    if ($exitCode == 1) {
                        $exitCodes[] = 'System site not refreshed!';
                    }

                    continue;
                }

                $exitCode = Artisan::call('migrate:refresh', [
                    '--database' => $site['id'],
                ]);

                if ($exitCode == 0) {
                    $exitCodes[] = 'Site ID ' . $site['id'] . ' successfuly refreshed!';
                }

                if ($exitCode == 1) {
                    $exitCodes[] = 'Site ID ' . $site['id'] . ' not refreshed!';
                }
            }

            $info = '';
            foreach ($exitCodes as $exitCode) {
                $info .= $exitCode . PHP_EOL;
            }

            return dd($info);
        }

        Config::set('site.id', 1);

        $exitCode = Artisan::call('migrate:refresh');

        if ($exitCode == 0) {
            return $this->info('System site successfuly migrated!');
        }

        if ($exitCode == 1) {
            return $this->error('System site not migrated!');
        }
    }
}
