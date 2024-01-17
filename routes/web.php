<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\CustomerController;

/*
|------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/login',[LoginController::class,'loginForm'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/registration',[RegisterController::class,'registerForm'])->name('registration');
Route::post('/registration',[RegisterController::class,'registration'])->name('registration');

Route::get('/crud',[CustomerController::class,'index'])->name('crud');

Route::get('/create',[CustomerController::class,'create'])->name('create');
Route::post('/create',[CustomerController::class,'store'])->name('create');

Route::delete('/photos/{id}', [CustomerController::class, 'destroy'])->name('destroy');




