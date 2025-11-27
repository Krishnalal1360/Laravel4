<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Models\User;

class UserCreateProgressBarCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user-create-progress-bar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create user with progress bar description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $count = $this->ask("Enter number of users you want to create: ");
        $bar = $this->output->createProgressBar($count);
        $bar->start();
        for($i=1;$i<=$count;$i++){
            $name = Str::random(7);
            $email = strtolower($name).'@gmail.com';
            $password = "password";
            User::create([
                        'name' => $name,
                        'email' => $email,
                        'password' => bcrypt($password)
            ]);
            $bar->advance();
        }
        $bar->finish();
        $this->info("\n$count Users are created successfully!");
    }
}
