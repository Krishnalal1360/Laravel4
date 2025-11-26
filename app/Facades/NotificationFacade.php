<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;  

class NotificationFacade extends Facade
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    //
    public static function getFacadeAccessor()
    {
        return 'notification';
    }
}
