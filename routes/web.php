<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MagangController;
use App\Models\Magang;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/index', [HomeController::class, 'admin'])->name('admin.index');

// Route Magang
Route::get('/admin/magang', [MagangController::class, 'index'])->name('admin.magang.index');

// Route Perusahaan
Route::get('/admin/company', [CompanyController::class, 'index'])->name('admin.company.index');