<!-- {{-- resources/views/admin/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: #f9f9f9;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 { color: #2c3e50; }
        .success { color: green; }
        .logout {
            display: inline-block;
            margin-top: 15px;
            background: #e74c3c;
            color: #fff;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
        }
        .logout:hover { background: #c0392b; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Dashboard!</h1>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if(session('user'))
            <p>Halo, <strong>{{ session('user')->name }}</strong> ({{ session('user')->email }})</p>
        @else
            <p>Anda belum login. <a href="{{ route('auth.index') }}">Login di sini</a>.</p>
        @endif

        <p>Anda sekarang berada di halaman Dashboard Admin.</p>

        <a href="{{ route('auth.logout') }}" class="logout">Logout</a>
    </div>
</body>
</html> -->
