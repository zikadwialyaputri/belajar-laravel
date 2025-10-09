<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // $data['nama']       = $request->nama;
        // $data['email']      = $request->email;
        // $data['pertanyaan'] = $request->pertanyaan;

        // return view('home-question-respon', $data);

        $request->validate([
            'nama'       => 'required|min:5|max:50',
            'email'      => 'required|email',
            'pertanyaan' => 'required|min:10|max:300',
        ], [
            'nama.required'       => 'Nama wajib diisi',
            'email.required'      => 'Email wajib diisi',
            'email.email'         => 'Format email tidak valid',
            'pertanyaan.required' => 'Pertanyaan wajib diisi'
        ]);
        $nama       = $request->input('nama');
        $email      = $request->input('email');
        $pertanyaan = $request->input('pertanyaan');

        $pesan = "Terimakasih {$request->nama}! Pertanyaan kamu : '{$request->pertanyaan}' akan segera kami respon melalui email {$request->email} yaaa!!.";
        return redirect()->back()->with('info', $pesan);

        // return view('home-question-respon', compact('nama', 'email', 'pertanyaan'));
        // return redirect()->route('home');
        // return redirect()->back();
        // return redirect()->away('https://www.example.com');
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
}
