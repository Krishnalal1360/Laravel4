<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\User;

class UserCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'user create command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $name = Str::random(7);
        $email = strtolower($name).'@gmail.com';
        $password = "password";
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);
        $this->info("User Created: Name - $name, Email - $email, Password - $password");
    }
}
