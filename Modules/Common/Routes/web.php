<?php

use Illuminate\Support\Facades\Route;

Route::group([], function() {
    
    Route::get('/', function () {
        return view('common::home');
    })->name('home');
});
