<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index (){
        return (view('admin.dashboard'));
    }

    public function mengelola_admin (){
        return (view('admin.mengelola_admin'));
    }

    public function form_tambah_admin(){
        return (view('admin.tambah_data_admin'));
    }
}
