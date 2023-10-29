<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardGuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataPendukungController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\TataUsahaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KepsekController;
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
})->name('login');

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

    //DATA PENDUKUNG
    //Mengelola Program Studi
    Route::get('/master-user/mengelola_programstudi', [DataPendukungController::class, 'mengelolaProgramStudi'])->name('mengelolaProgramStudi');
    Route::get('/master-user/tambah_data_programstudi', [DataPendukungController::class, 'tambah_prodi'])->name('tambah_prodi');
    Route::post('/master-user/post_prodi', [DataPendukungController::class, 'postTambahProdi'])->name('post_prodi');
    Route::get('/master-user/edit_data_programstudi/{id_prodi}',[DataPendukungController::class, 'formEditProdi'])->name('FormEditProdi');
    Route::post('/master-user/edit_programstudi/{id_prodi}',[DataPendukungController::class, 'postEditProdi'])->name('postEditProdi');
    Route::get('/master-user/hapus_programstudi/{id_prodi}',[DataPendukungController::class, 'deleteProdi'])->name('deleteProdi');
    Route::get('/master-user/info_programstudi/{id_prodi}',[DataPendukungController::class, 'infoProdi'])->name('infoProdi');
    
    //Mengelola data Kelas siswa
    Route::get('/master-user/mengelola_kelas', [DataPendukungController::class, 'mengelolaDataKelas'])->name('mengelolaDataKelas');
    Route::get('/master-user/tambah_data_kelas', [DataPendukungController::class, 'tambah_kelas'])->name('tambah_kelas');
    Route::post('/master-user/post_kelas', [DataPendukungController::class, 'postTambahKelas'])->name('post_kelas');
    Route::get('/master-user/edit_data_kelas/{id_kelas}',[DataPendukungController::class, 'formEditKelas'])->name('FormEditKelas');
    Route::post('/master-user/edit_kelas/{id_kelas}',[DataPendukungController::class, 'postEditKelas'])->name('postEditKelas');
    Route::get('/master-user/hapus_kelas/{id_kelas}',[DataPendukungController::class, 'deleteKelas'])->name('deleteKelas');

    //Mengelola data Mata Pelajaran
    Route::get('/master-user/mengelola_matapelajaran', [DataPendukungController::class, 'mengelolaDataMataPelajaran'])->name('mengelolaDataMataPelajaran');
    Route::get('/master-user/tambah_data_matapelajaran', [DataPendukungController::class, 'tambah_matapelajaran'])->name('tambah_mapel');
    Route::post('/master-user/post_mapel', [DataPendukungController::class, 'postTambahMapel'])->name('post_mapel');
    Route::get('/master-user/edit_data_matapelajaran/{id_mapel}',[DataPendukungController::class, 'formEditMapel'])->name('FormEditMapel');
    Route::post('/master-user/edit_matapelajaran/{id_mapel}',[DataPendukungController::class, 'postEditMapel'])->name('postEditMapel');
    Route::get('/master-user/hapus_matapelajaran/{id_mapel}',[DataPendukungController::class, 'deleteMapel'])->name('deleteMapel');

    //Mengelola Jadwal Pembelajaran 
    Route::get('/master-user/mengelola_jadwalpelajaran', [DataPendukungController::class, 'mengelolaDataJadwal'])->name('mengelolaDataJadwal');
    Route::get('/master-user/tambah_data_jadwalpelajaran', [DataPendukungController::class, 'tambah_jadwal'])->name('tambah_jadwal');
    Route::post('/master-user/post_jadwal', [DataPendukungController::class, 'postTambahJadwal'])->name('post_jadwal');
    Route::get('/master-user/edit_data_jadwal/{id_jadwal}',[DataPendukungController::class, 'formEditJadwal'])->name('FormEditJadwal');
    Route::post('/master-user/edit_jadwal/{id_jadwal}',[DataPendukungController::class, 'postEditJadwal'])->name('postEditJadwal');
    Route::get('/master-user/hapus_jadwal/{id_jadwal}',[DataPendukungController::class, 'deleteJadwal'])->name('deleteJadwal');

    //Mengelola data Penggajian
    Route::get('/master-user/mengelola_penggajian', [DataPendukungController::class, 'mengelolaDataPenggajian'])->name('mengelolaDataPenggajian');
    Route::get('/master-user/edit_data_penggajian/{id_penggajian}',[DataPendukungController::class, 'formEditPenggajian'])->name('FormEditPenggajian');
    Route::post('/master-user/edit_penggajian/{id_penggajian}',[DataPendukungController::class, 'postEditPenggajian'])->name('postEditPenggajian');

    //Mengelola data Absensi
    Route::get('/master-user/mengelola_absensi', [DataPendukungController::class, 'mengelolaDataAbsensi'])->name('mengelolaDataAbsensi');
    
});

Route::group(['middleware' => ['auth', 'ceklevel:Kepala Sekolah']], function () {
    // dashboard kepsek routes
    Route::get('/dashboard-kepsek',[DashboardController::class, 'indexKepsek']) -> name('dashboard-kepsek')->middleware('auth');
    Route::get('/dashboard-kepsek/laporan', [KepsekController::class,'laporanAbsensi'])->name('laporan-absensi')->middleware('auth');
});

Route::group(['middleware' => ['auth', 'ceklevel:Guru']], function () {
    // dashboard guru routes
    Route::get('/dashboard-guru',[DashboardGuruController::class, 'indexAction']) -> name('dashboard-guru')->middleware('auth');
    Route::get('/guru/profile', [DashboardGuruController::class, 'show'])->name('info-profile')->middleware('auth');
    Route::get('/guru/form-edit-profile', [DashboardGuruController::class, 'Formedit'])->name('form-edit-profile')->middleware('auth');
    Route::put('/guru/update-profile', [DashboardGuruController::class, 'update'])->name('update-profile')->middleware('auth');
    Route::get('/guru/absen/{id_jadwal}', [DashboardGuruController::class, 'absen'])->name('absen')->middleware('auth');
    Route::post('/guru/postAbsen/{id_jadwal}', [DashboardGuruController::class, 'postAbsen'])->name('postAbsen')->middleware('auth');

    //get Jadwal guru
    Route::get('/guru/jadwal', [DashboardGuruController::class, 'getJadwal'])->name('getJadwal')->name('getJadwal')->middleware('auth');
    
});



// test authentication
Route::post('/login', [LoginController::class, 'authenticate']);

