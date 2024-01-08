<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    $main['pageTitle'] = 'Dashboard';
    $main['subTitle'] = 'sa';
    $main['contentView'] = 'Dashboard';
    return view('index', compact('main'));
});

Route::get('login', [AuthController::class, 'login'])->name('login');
