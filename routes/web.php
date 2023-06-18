<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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
    return view('auth.login');
})->middleware(['guest']);

// Route::get('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware(['guest'])->name('passwordRequest');
Route::get('/reset-password', [LoginController::class, 'resetPassword'])->middleware(['guest'])->name('resetPassword');
Route::post('/reset-password', [LoginController::class, 'resetPassowrdStore'])->middleware(['guest'])->name('resetPassword.store');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
