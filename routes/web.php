<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::get('/information/{slug}', [InformationController::class, 'detail'])->name('information-detail');


/**
 * Update endpoint livewire
 * 1. Hanya bisa di php artisan route:clear
 * 2. Jika php artisan route:cache maka akan error karena livewire.update duplikat
 */
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/fuqing-web/livewire/update', $handle);
});
Livewire::setScriptRoute(function ($handle) {
    return Route::get('/fuqing-web/livewire/livewire.js', $handle);
});
