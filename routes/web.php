<?php

use Carbon\Carbon;
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

Route::get('/test', function () {
    
    // $date = Carbon::parse(now())->make(config(''))->locale(config('app.locale'))->diffForHumans();
   

    // $date = Carbon::parse('2018-06-15 12:34:00', 'UTC')->make('UTC')->locale(config('app.locale'));
    $date = Carbon::parse(now(), 'UTC')->make('UTC')->locale(config('app.locale'))->isoFormat('lll');
    $date2 = Carbon::parse(now(), 'UTC')->make('UTC')->locale(config('app.locale'))->isoFormat('LL');
    
    echo $date. '<br>'; 

    echo $date2; 
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
