<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="card p-5 text-center shadow" style="max-width: 500px;">
        <h2 class="text-success">Selamat Datang, {{ $username }}! 🎉</h2>
        <p class="mt-3">Login berhasil! Anda telah masuk ke sistem.</p>
        <a href="{{ route('login') }}" class="btn btn-primary mt-3">Kembali ke Login</a>
    </div>
</body>
</html>
