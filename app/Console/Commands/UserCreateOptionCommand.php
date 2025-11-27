<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Str;

class UserCreateOptionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-create-option {--name=} {--gmail=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create user with option description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $name = $this->option('name') ?? Str::random(7);
        $gmail = $this->option('gmail') ?? strtolower($name).'@gmail.com';
        $password = $this->option('password') ? bcrypt($this->option('password')) : bcrypt('password');
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
