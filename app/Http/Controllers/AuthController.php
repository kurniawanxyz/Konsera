<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(
        private User $user
    ) {
        $this->user = $user;
    }

    public function login(LoginRequest $request)
    {
        $request = $request->validated();
        $user = $this->user->where('email', $request['email'])->first();

        if (!$user) {
            return redirect()->back()->with("error", "User tidak ditemukan");
        }

        if (!password_verify($request['password'], $user->password)) {
            return redirect()->back()->with("error", "Terdapat kesalahan pada email atau password");
        }

        if ($user->role == 'admin') {
            return redirect()->route("admin.dashboard")->with("success", "Berhasil Login");
        } else {
            return redirect()->route('user.dashboard');
        }
    }
    public function register(RegisterRequest $request)
    {
        $request = $request->validated();
        $user = $this->user->create($request);
        if ($user) {
            return redirect()->route("auth.login")->with('success', 'Pengguna berhasil didaftarkan');
        } else {
            return redirect()->back()->with('error', 'Gagal mendaftarkan pengguna');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.page.login')->with("success","Berhasil Logout");
    }
}
