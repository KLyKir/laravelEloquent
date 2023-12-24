<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/event')->group(function () {
    Route::get('/', [\App\Http\Controllers\EventController::class, 'index'])->name('event.index');
    Route::get('/show/{id}', [\App\Http\Controllers\EventController::class, 'show'])->name('event.show');
});
Route::prefix('/user')->group(function () {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/info/{id}', [\App\Http\Controllers\UserController::class, 'info'])->name('user.info');
});
