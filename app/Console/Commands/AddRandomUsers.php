<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AddRandomUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-random-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert 10 random data to user table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        User::factory(10)->create();
    }
}
