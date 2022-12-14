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
Route::get('admin/tambah', [DashboardController::class, 'adminTambah'])->name('admin.tambah')->middleware('isadmin');
Route::post('admin/tambah', [DashboardController::class, 'adminCreate'])->name('admin.create')->middleware('isadmin');
Route::get('admin/edit/{id}', [DashboardController::class, 'adminEdit'])->name('admin.edit')->middleware('isadmin');
Route::post('admin/edit/{id}', [DashboardController::class, 'adminStore'])->name('admin.store')->middleware('isadmin');
Route::delete('admin/destroy/{id}', [DashboardController::class, 'adminDestroy'])->name('admin.destroy')->middleware('isadmin');


Route::get('procurement/', [DashboardController::class, 'procurementHome'])->name('procurement.home')->middleware('isadmin');
Route::get('procurement/mitra', [DashboardController::class, 'procurementMitra'])->name('procurement.mitra')->middleware('isadmin');
Route::get('procurement/edit/{id}', [DashboardController::class, 'procurementEdit'])->name('procurement.edit')->middleware('isadmin');
Route::post('procurement/edit/{id}', [DashboardController::class, 'procurementStore'])->name('procurement.store')->middleware('isadmin');

Route::get('area/home', [DashboardController::class, 'areaHome'])->name('area.home')->middleware('isadmin');
Route::get('area/edit/{id}', [DashboardController::class, 'areaEdit'])->name('area.edit')->middleware('isadmin');
Route::post('area/edit/{id}', [DashboardController::class, 'areaStore'])->name('area.store')->middleware('isadmin');

Route::get('regional/home', [DashboardController::class, 'regionalHome'])->name('regional.home')->middleware('isadmin');
Route::get('regional/dashboard', [DashboardController::class, 'regionalDashboard'])->name('regional.dashboard')->middleware('isadmin');
Route::get('regional/edit/{id}', [DashboardController::class, 'regionaledit'])->name('regional.edit')->middleware('isadmin');
Route::post('regional/edit/{id}', [DashboardController::class, 'regionalstore'])->name('regional.store')->middleware('isadmin');

Route::get('tl/home', [DashboardController::class, 'tlHome'])->name('tl.home')->middleware('isadmin');

Route::get('ss/home', [DashboardController::class, 'ssHome'])->name('ss.home')->middleware('isadmin');

Route::get('fa/home', [DashboardController::class, 'faHome'])->name('fa.home')->middleware('isadmin');

Route::get('mitra/home', [DashboardController::class, 'mitraHome'])->name('mitra.home')->middleware('ismitra');
Route::get('mitra/tambah', [DashboardController::class, 'mitraTambah'])->name('mitra.tambah')->middleware('ismitra');
Route::post('mitra/tambah', [DashboardController::class, 'mitraStore'])->name('mitra.store')->middleware('ismitra');
Route::get('mitra/edit/{id}', [DashboardController::class, 'mitraEdit'])->name('mitra.edit')->middleware('ismitra');
Route::post('mitra/edit/{id}', [DashboardController::class, 'mitraUpdate'])->name('mitra.Update')->middleware('ismitra');
Route::delete('mitra/destroy/{id}', [DashboardController::class, 'mitraDestroy'])->name('mitra.destroy')->middleware('ismitra');