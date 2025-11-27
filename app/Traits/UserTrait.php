<?php

namespace App\Traits;

trait UserTrait
{
    //
    public function getUserInfo(String $name, int $age, float $weight, bool $graduated){
        //
        dd("Name: $name, Age: $age, Weight: $weight, Graduated: ".($graduated ? 'Yes' : 'No'));
    }
}
