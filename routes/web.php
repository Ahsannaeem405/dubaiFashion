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


Route::get('/cls', function() {
    $run = Artisan::call('optimize:clear');
    Session::flush();
    return 'FINISHED';
});





Route::prefix('/admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/setting', [\App\Http\Controllers\AdminController::class, 'setting']);
    Route::post('/setting/update', [\App\Http\Controllers\AdminController::class, 'settingupdate']);
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



 //rsvp
    Route::get('/rsvp', [App\Http\Controllers\RsvpController::class, 'rsvp']);
    Route::get('/rsvp/{id}', [App\Http\Controllers\RsvpController::class, 'rsvpFind']);
    Route::post('/all/approve/{id}', [App\Http\Controllers\RsvpController::class, 'approveall']);

    Route::get('/rsvp/delete/{id}', [App\Http\Controllers\RsvpController::class, 'rsvpDelete']);
    Route::any('/rsvp/{id}/{status}', [App\Http\Controllers\RsvpController::class, 'rsvpStatus']);
    Route::any('send/pdf/{id}/', [App\Http\Controllers\RsvpController::class, 'rsvpSend']);
    Route::any('download/pdf/{id}/', [App\Http\Controllers\RsvpController::class, 'rsvpDownload']);

    //event history
    Route::get('/event/history', [App\Http\Controllers\EventController::class, 'eventHistory']);
    Route::get('/event/history/{id}', [App\Http\Controllers\EventController::class, 'eventHistoryfind']);

    //list

        Route::get('rsvp/history/list/all', [App\Http\Controllers\RsvpController::class, 'rsvpList']);
       Route::get('/rsvp/view/list/{id}', [App\Http\Controllers\RsvpController::class, 'rsvpFind2']);
       Route::get('resend/rsvp/{id}', [App\Http\Controllers\RsvpController::class, 'rsvpResend']);


    Route::get('/rsvpReport', [App\Http\Controllers\RsvpController::class, 'rsvpReport'])->name('rsvpHistory');
    Route::get('/eventReport', [App\Http\Controllers\RsvpController::class, 'eventReport'])->name('eventHistory');
    Route::get('/event/report/{id}', [App\Http\Controllers\RsvpController::class, 'eventReportDetail']);
    Route::get('/rsvpreport/{id}', [App\Http\Controllers\RsvpController::class, 'rsvpReportDetail']);

});

Route::prefix('/counter')->middleware(['auth','counter'])->group(function () {
    Route::get('/index', [\App\Http\Controllers\counterUserController::class, 'index']);
    Route::get('/scan/{id}', [\App\Http\Controllers\counterUserController::class, 'scan']);
    Route::post('event/verify', [App\Http\Controllers\counterUserController::class, 'verify']);
});
Auth::routes();


Route::get('/', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::post('/send/sms/code', [App\Http\Controllers\VerificationController::class, 'send']);
Route::post('/send/sms/code2', [App\Http\Controllers\VerificationController::class, 'send2']);
Route::post('verify/email/code', [App\Http\Controllers\VerificationController::class, 'verify']);
Route::get('verify/sms/resend', [App\Http\Controllers\VerificationController::class, 'resend']);
Route::get('verify/sms', [App\Http\Controllers\VerificationController::class, 'verifysms']);

Route::post('/final/step', [App\Http\Controllers\UserController::class, 'final']);
Route::post('submit/data', [App\Http\Controllers\UserController::class, 'submit']);
Route::post('submit/event', [App\Http\Controllers\UserController::class, 'submitevent']);


