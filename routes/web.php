<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Google URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', function () {
        return Socialite::driver('google')->redirect();
    })->name('login');

    Route::any('callback', function () {
        $user = Socialite::driver('google')->user();
        dd($user);
    })->name('callback');
});

// Facebook URL
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('login', function () {
        return Socialite::driver('facebook')->redirect();
    })->name('login');

    Route::any('callback', function () {
        $user = Socialite::driver('facebook')->user();
        dd($user);
    })->name('callback');
});
