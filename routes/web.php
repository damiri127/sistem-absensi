<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KepalaSekolahController;
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

//Info Admin
Route::get('/admin/info_admin/{id}',[AdminController::class, 'info_admin'])->name('info_admin');

//Hapus Admin
Route::get('/admin/hapus_admin/{id}',[AdminController::class, 'hapus_admin'])->name('hapus_admin');

// Kepala Sekolah
Route::resource('/kepala-sekolah', KepalaSekolahController::class);
//===============================================================
//MENGELOLA DATA TATA USAHA
Route::get('/admin/mengelola_tatausaha', [AdminController::class, 'mengelolaTataUsaha'])->name('mengelolaTataUsaha');
Route::get('/admin/tambah_data_tatausaha',[AdminController::class, 'formTambahDataTataUsaha'])->name('tambahDataTataUsaha');
Route::post('/admin/tambah_tatausaha', [AdminController::class, 'tambahTataUsaha'])->name('tambahTataUsaha');
Route::get('/admin/info_tatausaha/{id}',[AdminController::class, 'infoTataUsaha'])->name('infoTataUsaha');
Route::get('/admin/edit_data_tatausaha/{id}',[AdminController::class, 'formEditTataUsaha'])->name('FormEditTataUsaha');
Route::post('/admin/edit_tatausaha/{id}',[AdminController::class, 'editTataUsaha'])->name('editTataUsaha');
Route::get('/admin/hapus_tatausaha/{id}',[AdminController::class, 'hapusTataUsaha'])->name('hapusTataUsaha');

//MENGELOLA DATA GURU
Route::get('/admin/mengelola_guru', [AdminController::class, 'mengelolaGuru'])->name('mengelolaGuru');
Route::get('/admin/tambah_data_guru',[AdminController::class, 'formTambahDataGuru'])->name('tambahDataGuru');
Route::post('/admin/tambah_guru', [AdminController::class, 'tambahGuru'])->name('tambahGuru');
Route::get('/admin/info_guru/{id}',[AdminController::class, 'infoGuru'])->name('infoGuru');
Route::get('/admin/edit_data_guru/{id}',[AdminController::class, 'formEditGuru'])->name('FormEditGuru');
Route::post('/admin/edit_guru/{id}',[AdminController::class, 'editGuru'])->name('editGuru');
Route::get('/admin/hapus_guru/{id}',[AdminController::class, 'hapusGuru'])->name('hapusGuru');



// test authentication
Route::post('/login', [LoginController::class, 'authenticate']);
