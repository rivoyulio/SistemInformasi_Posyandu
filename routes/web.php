<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\PenimbanganController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VitaminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\BalitaDashboardController;
use App\Http\Controllers\PenimbanganDashboardController;
use App\Http\Controllers\PerawatDashboardController;
use App\Http\Controllers\JadwalDashboardController;
use App\Http\Controllers\KematianDashboardController;
use App\Http\Controllers\VitaminDashboardController;



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
Route::get('/home', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('balita', BalitaController::class);
Route::resource('penimbangan', PenimbanganController::class);
Route::resource('perawat', PerawatController::class);
Route::resource('vitamin', VitaminController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('kematian', KematianController::class);
Route::resource('balitadashboard', BalitaDashboardController::class)->middleware('auth');
Route::resource('penimbangandashboard', PenimbanganDashboardController::class)->middleware('auth');
Route::resource('perawatdashboard', PerawatDashboardController::class)->middleware('auth');
Route::resource('vitamindashboard', VitaminDashboardController::class)->middleware('auth');
Route::resource('kematiandashboard', KematianDashboardController::class)->middleware('auth');
Route::resource('jadwaldashboard', JadwalDashboardController::class)->middleware('auth');

Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);
