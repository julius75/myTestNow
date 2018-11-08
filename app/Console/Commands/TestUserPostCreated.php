<?php

namespace App\Console\Commands;

use App\Notifications\SlackNotification;
use App\User;
use Illuminate\Console\Command;

class TestUserPostCreated extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:slack';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A new post is created by a user';

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
        User::find(1)->notify(new SlackNotification());
        //$user->notify(new InvoicePaid($invoice));
    }
}
