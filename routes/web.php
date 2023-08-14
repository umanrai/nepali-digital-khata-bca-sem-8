<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [ \App\Http\Controllers\WelcomeController::class, 'index' ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([ 'prefix' => 'admin', 'as' => 'admin.' ], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::resources([
        'user' => \App\Http\Controllers\Admin\UserController::class
    ]);
});
