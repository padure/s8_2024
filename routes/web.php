<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CollectionController;
//Guest
Route::get('/', [GuestController::class, 'index'])->name('guest.index');

//Dashboard
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Route::resource('collections', CollectionController::class)->middleware('auth');
});