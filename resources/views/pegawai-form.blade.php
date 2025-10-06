<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
<div class="container">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4 text-primary">Form Input Data Pegawai</h2>

        <form action="{{ route('pegawai.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="birth_date" class="form-control" value="{{ old('birth_date') }}">
                @error('birth_date') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Harus Wisuda</label>
                <input type="date" name="tgl_harus_wisuda" class="form-control" value="{{ old('tgl_harus_wisuda') }}">
                @error('tgl_harus_wisuda') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Semester Saat Ini</label>
                <input type="number" name="current_semester" class="form-control" min="1" max="8" value="{{ old('current_semester') }}">
                @error('current_semester') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Cita-cita / Tujuan Karier</label>
                <input type="text" name="future_goal" class="form-control" value="{{ old('future_goal') }}">
                @error('future_goal') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Hobi (Pilih minimal 5)</label><br>
                @php
                    $daftarHobi = ['Membaca', 'Menulis', 'Ngoding', 'Mendengarkan Musik', 'Desain', 'Traveling', 'Fotografi'];
                @endphp
                @foreach($daftarHobi as $hobi)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="hobbies[]" value="{{ $hobi }}" 
                            {{ in_array($hobi, old('hobbies', [])) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $hobi }}</label>
                    </div>
                @endforeach
                @error('hobbies') <br><small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Tampilkan Data</button>
        </form>
    </div>
</div>
</body>
</html>
