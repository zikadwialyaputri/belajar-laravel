<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password' => [
                'required',
                'min:3',
                'regex:/[A-Z]/',
            ],
        ];
        $messages = [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min'      => 'Password minimal harus :min karakter.',
            'password.regex'    => 'Password harus mengandung minimal satu huruf kapital.',
        ];
        $request->validate($rules, $messages);
        $username = $request->username;
        $password = $request->password;
        if ($username === $password) {
            return redirect()->route('dashboard')->with('success', 'Login Berhasil! Selamat datang, ' . $username . '.');
        } else {
            return redirect()->back()->withErrors(['gagal' => 'Username dan Password tidak sama!'])->withInput();
        }
    }
    public function index()
    {
        return view('auth.login-form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function index()
    // {

    //     return view('login');
//     // }
//     public function login(Request $request)
//     {
//         $request->validate([
//             'username' => 'required',
//             'password' => 'required|min:3|regex:/[A-Z]/',
//         ], [
//             'username.required' => 'Username wajib diisi',
//             'password.required' => 'Password wajib diisi',
//             'password.min'      => 'Password minimal 3 karakter',
//             'password.regex'    => 'Password harus mengandung huruf kapital',
//         ]);

//         $username = $request->input('username');
//         $password = $request->input('password');

//         if ($username === 'zika' && $password === 'Zika123') {
//     session(['username' => $username]);
//     return redirect()->route('auth.success');
//         } else {
//             return back()->with('error', 'Username atau password salah');
//         }

//     }
}
