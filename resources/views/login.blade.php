<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Auth Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ff00aaad, #12b1a1b8);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 400px;
            padding: 30px;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        }

        .login-card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #2575fc;
        }

        .btn-login {
            background: #2575fc;
            border: none;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #1ec4d0d3;
        }
    </style>
</head>

<body>

    <div class="login-card">

        <h2>Login</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ url('/auth/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
                @error('username')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-login w-100">Masuk</button>
        </form>

        <p class="text-center mt-3 text-muted" style="font-size: 14px;">
            © 2025 Sistem Login Website Zika
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
