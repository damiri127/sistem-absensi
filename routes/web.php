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

// test authentication
Route::post('/login', [LoginController::class, 'authenticate']);
