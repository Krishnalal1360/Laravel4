<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DIController;
use App\Services\NotificationService;
use App\Facades\NotificationFacade;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductBindController;

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
    $notifyService = app(NotificationService::class);
    dd($notifyService->send('Hello World', 'david@gmail.com'));
});

Route::get('/notify-facade', function(){
    //
    dd(NotificationFacade::send('Hello World', 'david@gmail.com'));
});

Route::resource('/products', ProductController::class);

Route::resource('/product-bind', ProductBindController::class);

Route::get('/frontend/{lang}', function(string $lang){
    //
    if(in_array($lang, ['en', 'hi'])){
        app()->setLocale($lang);
    }else{
        app()->getFallbackLocale();
    }
    return view('frontend');
});