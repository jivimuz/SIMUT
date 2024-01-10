<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
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
Route::middleware(['auth'])->group(function () {
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('logout', [AuthController::class, 'actionlogout'])->name('logout');
});

Route::prefix('login')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('loginAuth', [AuthController::class, 'loginAuth'])->name('loginAuth');
});
