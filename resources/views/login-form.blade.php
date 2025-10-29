<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #132042ff, #1a5fc4);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 350px;
            padding: 25px 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        h2 { text-align: center; color: #132042ff; margin-bottom: 20px; }
        input[type="text"], input[type="password"] {
            width: 100%; padding: 10px;
            margin: 8px 0; border: 1px solid #ccc;
            border-radius: 5px; box-sizing: border-box;
        }
        button {
            width: 100%; padding: 10px;
            background: #26374dff; color: white;
            border: none; border-radius: 5px;
            cursor: pointer; font-weight: bold;
        }
        button:hover { background: #1a5fc4; }
        .alert {
            background: #ffd1d1;
            color: #900;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            font-size: 14px;
        }
        .alert ul { margin: 0; padding-left: 18px; }
    </style>
</head>
<body>
<div class="container">
    <h2>Form Login</h2>

    @if(session('error'))
        <div class="alert">{{ session('error') }}</div>
    @endif

    @if($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/auth/login') }}" method="POST">
        @csrf
        <label>Email:</label>
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan email">

        <label>Password:</label>
        <input type="password" name="password" placeholder="Masukkan password">

        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
