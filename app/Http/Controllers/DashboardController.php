<?php

namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index (){
        $title = "Beranda";
        return (view('master-user.dashboard', ['title' => $title]));
    }

}
