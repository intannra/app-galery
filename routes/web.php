<?php

use App\Http\Controllers\GaleryController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'proseslogin']);
Route::get('/register',[UserController::class,'register']);
Route::post('/simpanreg',[UserController::class,'saveRegister']);

Route::resource('galery',GaleryController::class)->middleware('auth');
Route::post('hapusfoto/{id}',[GaleryController::class,'detele']);

Route::get('/logout',[UserController::class,'logout']);