<?php

use App\Http\Controllers\DataminingController;
use App\Http\Controllers\NasabahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProses'])->name('login.proses');
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');


Route::get('/home', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'checkRole:admin']);

Route::resource('data-mining', DataminingController::class)->middleware(['auth', 'checkRole:admin']);

route::get('/hasil', [DataminingController::class, 'hasil'])->middleware(['auth', 'checkRole:admin,user']);

Route::resource('data-nasabah', NasabahController::class)->middleware(['auth', 'checkRole:admin']);

route::get('/hitung/{id}', [DataminingController::class, 'hitung'])->middleware(['auth', 'checkRole:admin']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
