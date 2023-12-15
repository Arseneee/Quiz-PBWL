<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/golongan', [App\Http\Controllers\GolController::class, 'index']);
Route::get('/golongan/create', [App\Http\Controllers\GolController::class, 'create']);
Route::post('/golongan', [App\Http\Controllers\GolController::class, 'store']);
Route::get('/golongan/edit/{id}', [App\Http\Controllers\GolController::class, 'edit']);
Route::patch('/golongan/{id}', [App\Http\Controllers\GolController::class, 'update']);
Route::delete('/golongan/{id}', [App\Http\Controllers\GolController::class, 'destroy']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/user', [App\Http\Controllers\UserController::class, 'store']);
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::patch('/user/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('/user/{id}', [App\Http\Controllers\UserController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\PelController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelController::class, 'destroy']);