<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan daftar semua data";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Menampilkan form untuk membuat data baru";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return "Menyimpan data yang dikirim melalui form atau API";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id = null)
    {
        if($id){
            return "Anda Mengakses Matakuliah ".$id;
        }else{
            return "Masukkan kode Mata Kuliah!";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return "Menampilkan form untuk membuat data baru";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        return "Memperbarui data yang sudah ada";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        return "Menghapus data";

    }
}
