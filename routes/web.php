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


    //event
    Route::get('/event', [\App\Http\Controllers\EventController::class, 'event']);
    Route::post('/add/event', [\App\Http\Controllers\EventController::class, 'addEvent']);
    Route::get('event/del/{id}', [\App\Http\Controllers\EventController::class, 'delEvent']);
    Route::post('/update/event/{id}', [\App\Http\Controllers\EventController::class, 'updateEvent']);


    Route::get('/seats/{id}', [\App\Http\Controllers\SeatController::class, 'seat']);
    Route::post('/add/seat/{id}', [\App\Http\Controllers\SeatController::class, 'addSeat']);
    Route::get('seat/del/{id}', [\App\Http\Controllers\SeatController::class, 'delSeat']);
    Route::post('/update/seat/{id}', [\App\Http\Controllers\SeatController::class, 'updateSeat']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
