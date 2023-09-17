<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataPendukungController;
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
Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {
    // dashboard admin dan TU routes
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
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

});

Route::group(['middleware' => ['auth', 'ceklevel:Admin,Tata Usaha']], function () {
    // dashboard admin dan TU routes
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
     // Kepala Sekolah
    Route::resource('/master-user/kepala-sekolah', KepalaSekolahController::class);
    //MENGELOLA DATA TATA USAHA
    Route::resource('/master-user/tata-usaha', TataUsahaController::class);
    //MENGELOLA DATA GURU
    Route::resource('/master-user/guru', GuruController::class);
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


//================================================================//
//DATA PENDUKUNG
    //Mengelola Program Studi
    Route::get('/admin/mengelola_programstudi', [DataPendukungController::class, 'mengelolaProgramStudi'])->name('mengelolaProgramStudi');
    Route::get('/admin/tambah_data_programstudi', [DataPendukungController::class, 'tambah_prodi'])->name('tambah_prodi');
    Route::post('/admin/post_prodi', [DataPendukungController::class, 'postTambahProdi'])->name('post_prodi');
    Route::get('/admin/edit_data_programstudi/{id_prodi}',[DataPendukungController::class, 'formEditProdi'])->name('FormEditProdi');
    Route::post('/admin/edit_programstudi/{id_prodi}',[DataPendukungController::class, 'postEditProdi'])->name('postEditProdi');
    Route::get('/admin/hapus_programstudi/{id_prodi}',[DataPendukungController::class, 'deleteProdi'])->name('deleteProdi');
    Route::get('/admin/info_programstudi/{id_prodi}',[DataPendukungController::class, 'infoProdi'])->name('infoProdi');
    

    //Mengelola data Kelas siswa
    Route::get('/admin/mengelola_kelas', [DataPendukungController::class, 'mengelolaDataKelas'])->name('mengelolaDataKelas');
    Route::get('/admin/tambah_data_kelas', [DataPendukungController::class, 'tambah_kelas'])->name('tambah_kelas');
    Route::post('/admin/post_kelas', [DataPendukungController::class, 'postTambahKelas'])->name('post_kelas');
    Route::get('/admin/edit_data_kelas/{id_kelas}',[DataPendukungController::class, 'formEditKelas'])->name('FormEditKelas');
    Route::post('/admin/edit_kelas/{id_kelas}',[DataPendukungController::class, 'postEditKelas'])->name('postEditKelas');
    Route::get('/admin/hapus_kelas/{id_kelas}',[DataPendukungController::class, 'deleteKelas'])->name('deleteKelas');

    //Mengelola data Mata Pelajaran
    Route::get('/admin/mengelola_matapelajaran', [DataPendukungController::class, 'mengelolaDataMataPelajaran'])->name('mengelolaDataMataPelajaran');
    Route::get('/admin/tambah_data_matapelajaran', [DataPendukungController::class, 'tambah_matapelajaran'])->name('tambah_mapel');
    Route::post('/admin/post_mapel', [DataPendukungController::class, 'postTambahMapel'])->name('post_mapel');
    Route::get('/admin/edit_data_matapelajaran/{id_mapel}',[DataPendukungController::class, 'formEditMapel'])->name('FormEditMapel');
    Route::post('/admin/edit_matapelajaran/{id_mapel}',[DataPendukungController::class, 'postEditMapel'])->name('postEditMapel');
    Route::get('/admin/hapus_matapelajaran/{id_mapel}',[DataPendukungController::class, 'deleteMapel'])->name('deleteMapel');
    

// test authentication
Route::post('/login', [LoginController::class, 'authenticate']);

