<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login-form');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.'
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('error', 'Email tidak ditemukan.')->withInput();
        }
        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password salah.')->withInput();
        }

        session(['user_id' => $user->id]);

        return redirect()->route('dashboard')->with('success', 'Login berhasil! Selamat datang, ' . $user->name);
    }
}
