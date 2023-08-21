<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::get('/admin/mengelola_admin', [AdminController::class, 'mengelola_admin'])->name('mengelola_admmin');
Route::get('/admin',[AdminController::class, 'index'])->name('admin_dashboard');
Route::get('/admin/tambah_data_admin',[AdminController::class, 'form_tambah_admin'])->name('tambah_data_admin');

//POST DATA ADMIN KETIKA DITAMBAHKAN
Route::post('/admin/tambah_admin', [AdminController::class, 'tambah_admin'])->name('tambah_admi');

//EDIT DATA ADMIN
Route::get('/admin/edit_data_admin/{id}',[AdminController::class, 'form_edit_admin'])->name('edit_data_admin');
Route::post('/admin/edit_admin/{id}',[AdminController::class, 'edit_admin'])->name('edit_admin');

// test authentication
Route::post('/login', [LoginController::class, 'authenticate']);
