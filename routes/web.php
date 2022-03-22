<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
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

// Twitter URL
Route::prefix('twitter')->name('twitter.')->group( function(){
    Route::get('login', function () {
        return Socialite::driver('twitter')->redirect();
    })->name('login');

    Route::any('callback', function () {
        $user = Socialite::driver('twitter')->user();
        dd($user);
    })->name('callback');
});

// import File
Route::get('/import', function () {
    
    return view('import',[
        'users' => App\Models\User::all()
    ]);
});

Route::post('import', function () {
    Excel::import(new UsersImport, request()->file('file'));
    // return redirect()->back()->with('success','Data Imported Successfully');
});