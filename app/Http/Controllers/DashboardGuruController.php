<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardGuruController extends Controller
{
    public function indexAction(){
        return view('guru.index', [
            'name' => 'dashboard-guru'
        ]);
    }
}
