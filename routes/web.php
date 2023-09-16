<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\TataUsahaController;
use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// logout action
Route::get('/logout', [LoginController::class, 'logoutAction'])->name('logout');

// test authentication
Route::post('/login', [LoginController::class, 'authenticate']);


// Cek Level Authentication
Route::group(['middleware' => ['auth', 'ceklevel:Admin,Tata Usaha']], function () {
    // dashboard admin dan TU routes
    Route::get('/master-user',[DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
});

Route::group(['middleware' => ['auth', 'ceklevel:Kepala Sekolah']], function () {
    // dashboard kepsek routes
    
});

Route::group(['middleware' => ['auth', 'ceklevel:Guru']], function () {
    // dashboard guru routes
    
});

Route::group(['middleware' => ['auth', 'ceklevel:Tu']], function () {
    // dashboard tu routes
    
});


//================================================================
// MENGELOLA ADMIN
Route::resource('/master-user/admin', AdminController::class);

//===============================================================
// Kepala Sekolah
Route::resource('/master-user/kepala-sekolah', KepalaSekolahController::class);

//===============================================================
//MENGELOLA DATA TATA USAHA
Route::resource('/master-user/tata-usaha', TataUsahaController::class);

//MENGELOLA DATA GURU
Route::resource('/master-user/guru', GuruController::class);

