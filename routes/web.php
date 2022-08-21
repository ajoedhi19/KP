<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\RiskyTestError;

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
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware("guest");
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard/mitra', [DashboardController::class, 'index'])->name('dashboard.mitra')->middleware('isadmin');

Route::get('admin/home', [DashboardController::class, 'adminHome'])->name('admin.home')->middleware('isadmin');


Route::get('procurement/', [DashboardController::class, 'procurementHome'])->name('procurement.home')->middleware('isadmin');

Route::get('procurement/edit/{id}', [DashboardController::class, 'procurementEdit'])->name('procurement.edit')->middleware('isadmin');
Route::post('procurement/edit/{id}', [DashboardController::class, 'procurementStore'])->name('procurement.store')->middleware('isadmin');