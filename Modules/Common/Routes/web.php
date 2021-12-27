<?php

use Illuminate\Support\Facades\Route;
use Modules\Common\Http\Controllers\CommonController;

Route::group([], function() {
    
    Route::get('/', [CommonController::class, 'index'])->name('home');
});
