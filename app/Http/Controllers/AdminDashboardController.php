<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Group;
use App\Models\Instrumen;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::where("role","user")->get()->count(),
            "grup" => Group::all()->count(),
            "instrumen" => Instrumen::all()->count(),
            "buku" => Books::all()->count(),
        ];
        return view('admin.dashboard',compact("data"));
    }
}
