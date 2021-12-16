<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\Auth\LoginController;
use Modules\User\Http\Controllers\Auth\RegisterController;

Route::group([],function() {
    // Route::get('power/user', 'UserController@index');

    // Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
    Route::get('signin', [LoginController::class, 'signinView'])->name('signin.view');
    Route::post('signin', [LoginController::class, 'signin'])->name('signin'); 
    Route::get('signup', [RegisterController::class, 'signupView'])->name('signup.view');
    Route::post('signup', [RegisterController::class, 'signup'])->name('signup'); 
    Route::post('signout', [LoginController::class, 'signOut'])->name('signout');

});
