<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::get('/information/{slug}', [InformationController::class, 'detail'])->name('information-detail');
