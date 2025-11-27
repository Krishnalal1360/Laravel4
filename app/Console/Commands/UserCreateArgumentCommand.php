<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class UserCreateArgumentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-create-argument {name} {gmail} {password}';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'create user with argument description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $name = $this->argument('name');
        $gmail = $this->argument('gmail');
        $password = $this->argument('password');
        //
        User::create([
            "name" => $name,
            "email" => $gmail,
            "password" => $password
        ]);
        //
        $this->info("User Created: Name - $name, Email - $gmail, Password - $password");
    }
}
