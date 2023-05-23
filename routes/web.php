<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HalamanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/autentikasi', [SessionController::class,  'index'])->middleware('isUser');
Route::post('/autentikasi/login', [SessionController::class,  'login'])->middleware('isUser');
Route::get('/autentikasi/logout', [SessionController::class,  'logout']);
Route::get('/autentikasi/register', [SessionController::class,  'register'])->middleware('isUser');
Route::post('/autentikasi/create', [SessionController::class,  'create'])->middleware('isUser');
Route::get('/menu', [HalamanController::class,  'index'])->middleware('isLogin');

// Route::get('menu', MenuController::class, 'index');