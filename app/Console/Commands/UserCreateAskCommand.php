<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class UserCreateAskCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-create-ask';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create user with ask description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $name = $this->ask("Enter user name: ");
        $gmail = $this->ask("Enter user gmail: ");
        $password = bcrypt($this->ask("Enter user password: "));
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
