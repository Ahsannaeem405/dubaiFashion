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

Route::get('/', function () {
    return view('welcome');
});

Route::view('events','events');


Route::prefix('/admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/counter', [\App\Http\Controllers\CounterController::class, 'index']);
    Route::get('/add/counter', [\App\Http\Controllers\CounterController::class, 'add']);
    Route::post('/counter/store', [\App\Http\Controllers\CounterController::class, 'store']);
    Route::get('/counter/del/{id}', [\App\Http\Controllers\CounterController::class, 'delete']);
    Route::get('/counter/edit/{id}', [\App\Http\Controllers\CounterController::class, 'edit']);
    Route::post('/counter/update/{id}', [\App\Http\Controllers\CounterController::class, 'update']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
