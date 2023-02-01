<?php

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

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthUserController;

Route::get('/', [fn() => view('welcome')] );

Route::post('/auth', [AuthUserController::class, 'authenticate']);

Route::post('/logout', [AuthUserController::class, 'logout']);

Route::get('/register', [fn() => view('auth.register')] );

Route::get('/login', [fn() => view('auth.login')] )->name('login');

Route::post('/register/user', [UsuarioController::class, 'registerUser']);

Route::get('/list', [UsuarioController::class, 'index'])->middleware('auth');

Route::get('/events/create', [fn() => view('events.create')] )->middleware('auth');

Route::post('/events', [UsuarioController::class, 'store']);

Route::get('/events/edit/{id}', [UsuarioController::class, 'edit'])->middleware('auth');

Route::put('events/update/{id}', [UsuarioController::class, 'update']);

Route::delete('/events/delete/{id}', [UsuarioController::class, 'destroy'])->middleware('auth');

