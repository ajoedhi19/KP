<?php

namespace App\Http\controllers;

use App\Http\Controllers\NakerController;
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
    return view('login');
});

Route::get('/registrasi', [MitraController::class, 'create']);
Route::post('/registrasi/mitra', [MitraController::class, 'store']);

Route::get('/dashboard/admin', [AdminController::class, 'index']);
Route::get('/dashboard/mitra', [MitraController::class, 'index']);

Route::get('/dashboard/mitra/formnaker', [NakerController::class, 'create']);
Route::post('/dashboard/mitra/formnaker/registrasi', [NakerController::class, 'store']);
