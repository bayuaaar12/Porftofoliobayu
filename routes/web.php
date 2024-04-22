<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::controller(AdminController::class)->group(function () {
    Route::get('admin', 'index');
    Route::get('panel/portofoliodaftar', 'portofoliodaftar');
    Route::post('panel/portofoliodaftarcari', 'portofoliodaftarcari');
    Route::get('panel/portofoliotambah', 'portofoliotambah');
    Route::post('panel/portofoliotambahsimpan', 'portofoliotambahsimpan');
    Route::get('panel/portofolioedit/{id}', 'portofolioedit');
    Route::post('panel/portofolioeditsimpan/{id}', 'portofolioeditsimpan');
    Route::get('panel/portofoliohapus/{id}', 'portofoliohapus');
    Route::get('panel/logout', 'logout');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('loginakun', 'login');
    Route::post('logincek', 'logincek');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
