<form action="{{ route('auth.login') }}" method="POST">
    @csrf

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="{{ old('username') }}" required>
        @error('username') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        @error('password') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <button type="submit">Login</button>
</form>
