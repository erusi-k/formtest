<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/home',[PostController::class,'input'])->name('home');
Route::post('/confirm',[PostController::class,'confirm']);
Route::post('/create',[PostController::class,'create']);
Route::get('/complete',[PostController::class,'complete']);
Route::get('/find',[PostController::class,'find']);
Route::post('/find',[PostController::class,'search']);