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

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/appointment',[App\Http\Controllers\AppointmentController::class,'appointment'])->name('post.add');
Route::post('/appointment',[App\Http\Controllers\AppointmentController::class,'addAppointment'])->name('save.post');
