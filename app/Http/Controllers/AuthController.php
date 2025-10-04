<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Function index → tampilkan halaman login
    public function index()
    {
        return view('login'); // arahkan ke resources/views/login.blade.php
    }

    // Function login → proses data login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:3|regex:/[A-Z]/',
        ], [
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min'      => 'Password minimal 3 karakter',
            'password.regex'    => 'Password harus mengandung huruf kapital',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin' && $password === 'Admin123') {
            return "Login berhasil, selamat datang $username";
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }
}
