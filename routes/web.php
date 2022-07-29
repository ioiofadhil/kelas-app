<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', HomeController::class);
Route::resource('dashboard', DashboardController::class);

Route::get('/login', [AuthController::class, 'index_login'])->name('auth.index_login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'index_register'])->name('auth.index_register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
