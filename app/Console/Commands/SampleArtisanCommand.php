<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SampleArtisanCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sample:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ini contoh perintah artisan baru';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
