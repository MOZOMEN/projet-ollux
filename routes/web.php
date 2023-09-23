<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

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
    return view('index');
});

Route::get('/welcome', function () {
    return view("welcome");
});

Route::get('/page', function () {
    return view("page");
});


Route::get('/home', [LocalizationController::class, 'index']);
Route::get('lang/change', [LocalizationController::class, 'change'])->name('changelang');
Route::get('/index', function () {
    return view('index');
});
Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/vision', function () {
    return view('vision');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/projet', function () {
    return view('projet');
});
Route::get('/motdir', function () {
    return view('motdir');
});
Route::get('/impactplus', function () {
    return view('impactplus');
});
Route::get('/impact', function () {
    return view('impact');
});
Route::get('/contact', function () {
    return view('contact');
});



