<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
<div class="container">
    <div class="card shadow p-4">
        <h1 class="text-center text-success mb-4 bold">Hasil Data Mahasiswa</h1>

        <p><strong>Nama:</strong> {{ $name }}</p>
        <p><strong>Umur:</strong> {{ $my_age }} tahun</p>
        <p><strong>Tanggal Harus Wisuda:</strong> {{ $tgl_harus_wisuda }}</p>
        <p><strong>Sisa Hari Menuju Wisuda:</strong> {{ $time_to_study_left }} hari</p>
        <p><strong>Semester Saat Ini:</strong> {{ $current_semester }}</p>

        <p><strong>Motivasi:</strong> {{ $motivasi }}</p>

        <p><strong>Cita-cita:</strong> {{ $future_goal }}</p>

        <p><strong>Hobi:</strong></p>
        <ul>
            @foreach($hobbies as $hobi)
                <li>{{ $hobi }}</li>
            @endforeach
        </ul>

        <div class="text-center mt-4">
            <a href="{{ route('pegawai.form') }}" class="btn btn-outline-primary">Kembali ke Form</a>
        </div>
    </div>
</div>
</body>
</html>
