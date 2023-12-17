<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DashboardController;

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

Route::get('/Cart', [CartController::class, 'CartView']);
Route::get('/Dashboard/{parameter}', [DashboardController::class, 'DashboardView']);
Route::get('/Login', [LoginController::class, 'LoginView']);
Route::get('/Update', [UpdateController::class, 'UpdateView']);
