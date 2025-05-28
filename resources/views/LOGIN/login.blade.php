<!DOCTYPE html>
<html>
<head>
    <title>Login - FurniStyle</title>
</head>
<body>
    <h2>Login Page</h2>

    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('signup.form') }}">Daftar</a></p>
</body>
</html>
