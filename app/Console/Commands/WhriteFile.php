<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\MyCustomJob;

class WhriteFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'write-file {--file=} {--message=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Appends a line in file.';

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
        if (!$this->option('file')) {
            return $this->error('You must provide a file name on public/files.');
        }

        if (!$this->option('message')) {
            return $this->error('You must provide a message to append to file.');
        }

        MyCustomJob::dispatch($this->option('file'), $this->option('message'))->onQueue(config('site.id') ?? 'system');
    }
}
