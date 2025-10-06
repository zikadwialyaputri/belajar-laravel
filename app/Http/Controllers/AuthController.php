<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {

        return view('login');
    }
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

        if ($username === 'zika' && $password === 'Zika123') {
    session(['username' => $username]); 
    return redirect()->route('auth.success');
        } else {
            return back()->with('error', 'Username atau password salah');
        }
    }
}
