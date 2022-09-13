<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // je retourne mon dashboard :
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
