<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DIController;
use App\Services\NotificationService;
use App\Facades\NotificationFacade;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/di', DIController::class);

Route::get('test', function(){
    //
    dd(app());
});

Route::get('/first-class', function(){
    //
    app()->make('first-class');
});

Route::get('/test-service', function(){
    //
    return app()->make('test-service');
});

Route::get('/notify-service', function(){
    //
    /*$notifyService = app(NotificationService::class);
    dd($notifyService->send('Hello World', 'david@gmail.com'));*/
    dd(NotificationFacade::send('Hello World', 'david@gmail.com'));
});