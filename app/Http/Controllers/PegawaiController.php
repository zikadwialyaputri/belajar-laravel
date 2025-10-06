<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function form()
    {
        return view('pegawai-form');
    }
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birth_date' => 'required|date',
            'tgl_harus_wisuda' => 'required|date|after:today',
            'current_semester' => 'required|integer|min:1',
            'future_goal' => 'required',
            'hobbies' => 'required|array|min:5',
        ], [
            'name.required' => 'Nama wajib diisi',
            'birth_date.required' => 'Tanggal lahir wajib diisi',
            'tgl_harus_wisuda.after' => 'Tanggal wisuda harus setelah hari ini',
            'current_semester.required' => 'Semester wajib diisi',
            'future_goal.required' => 'Cita-cita wajib diisi',
            'hobbies.required' => 'Minimal pilih 3 hobi',
        ]);
        $name = $request->input('name');
        $birth_date = Carbon::parse($request->input('birth_date'));
        $tgl_harus_wisuda = Carbon::parse($request->input('tgl_harus_wisuda'));
        $current_semester = $request->input('current_semester');
        $future_goal = $request->input('future_goal');
        $hobbies = $request->input('hobbies');
        $my_age = $birth_date->age;
        $time_to_study_left = Carbon::now()->diffInDays($tgl_harus_wisuda, false);

        if ($current_semester < 3) {
            $motivasi = "Masih Awal, Kejar TAK";
        } else {
            $motivasi = "Jangan main-main kurang-kurangi main GAME nyaa!!";
        }
        return view('pegawai', [
            'name' => $name,
            'my_age' => $my_age,
            'hobbies' => $hobbies,
            'tgl_harus_wisuda' => $tgl_harus_wisuda->toFormattedDateString(),
            'time_to_study_left' => $time_to_study_left,
            'current_semester' => $current_semester,
            'motivasi' => $motivasi,
            'future_goal' => $future_goal
        ]);
    }
}
