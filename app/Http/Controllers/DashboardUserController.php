<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Menampilkan view user.dashboard
     *
     * @return void
     */
    public function index()
    {
        return view('user.dashboard');
    }
}
