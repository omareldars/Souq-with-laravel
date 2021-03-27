<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // Artisan::call('key:generate');

    return 'Cleared...';
});

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('/');
Route::get('reservation/{room}', 'App\Http\Controllers\HomeController@reservation')->name('reservation');


Route::get('checkout/{room}','App\Http\Controllers\CheckoutController@checkout')->name('checkout');
Route::post('checkout','App\Http\Controllers\CheckoutController@afterpayment')->name('checkout.credit-card');

Auth::routes();
