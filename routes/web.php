<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ReportController;


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

Route::get('login', function () {
    return view('staff/login');
});

Route::get('/driverlist', function () {
    return view('driverlist');
});

Route::get('/reportlist', function () {
    return view('reportlist');
});

Route::get('/statuslist', function () {
    return view('statuslist');
});