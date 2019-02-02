<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class TenancyMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenancy:migrate {--site-id=} {--all?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate tenant database.';

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

        if (!$this->option('site-id')) {
            return $this->error('You must provide a tenan site id!');
        }

        $exitCode = Artisan::call('migrate', [
            '--database' => $this->option('site-id'),
        ]);

        if ($exitCode == 0) {
            return $this->info('Site ID ' . $this->option('site-id') . ' successfuly migrated!');
        }

        if ($exitCode == 1) {
            return $this->error('Site ID ' . $this->option('site-id') . ' not migrated!');
        }
    }
}
