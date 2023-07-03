<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


//Ruta para el login
Route::get('/', [LoginController::class, 'index'])->name('login');
//Ruta para iniciar sesión en el sistema
Route::post('/', [LoginController::class, 'store']);
//Ruta para el register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
//Ruta para el registro de usuarios
Route::post('/register', [RegisterController::class, 'store']);
//Funcion para redireccionar al dashboard
Route::get('/dashboard', [PostController::class, 'index'])->name('post.index');