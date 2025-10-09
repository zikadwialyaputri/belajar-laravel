<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Berhasil</title>
</head>
<body>
    <h1>Selamat Datang di Dashboard!</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <p>Anda telah berhasil login.</p>
</body>
</html>
