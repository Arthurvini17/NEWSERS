<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/',[UserController::class, 'create'])->name('create.user');
Route::delete('/{user}',[UserController::class, 'destroy'])->name('users.destroy');

Route::get('/login',[AuthController::class, 'index'])->name('index.user');
Route::post('/login',[AuthController::class, 'auth'])->name('auth');


Route::get('/register', [AuthController::class, 'index_register'])->name('index.create');
Route::post('/register', [AuthController::class, 'register_create'])->name('create.funcionario');

Route::get('/', [UserController::class,'search'])->name('users.search');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');