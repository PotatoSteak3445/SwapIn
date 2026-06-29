<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade-in | Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/42dot-sans@5.2.9/index.css">
</head>
<body class="auth-body">

<div class="auth-page">

    {{-- LEFT SIDE --}}
    <div class="auth-left">
        <a href="{{ route('home') }}" class="auth-logo">Trade-in</a>
        <img src="{{ asset('images/photo.jpg') }}" alt="Trade-in illustration" class="auth-illustration">
        <p class="auth-tagline"><strong>Buy for a great price, and sell for others in need</strong></p>
        <p class="auth-sub">Become part of Trade-in to find out more!</p>
        <div class="auth-circle-bl"></div>
    </div>

    {{-- RIGHT SIDE --}}
    <div class="auth-right">
        <div class="auth-circle-tr"></div>
        <div class="auth-form-wrap">
            <h2 class="auth-title">Daftar Sekarang</h2>
            <p class="auth-subtitle">Sudah Punya Akun? <a href="#" onclick="history.back()">Login</a></p>

            <div class="auth-google-row">
                <button class="auth-btn-google">
                    <svg width="18" height="18" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                    Google
                </button>
                <button class="auth-btn-google">
                    <svg width="18" height="18" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.77c2.08-1.92 3.28-4.74 3.28-8.09z"/></svg>
                    Google
                </button>
            </div>
            <p class="auth-or">Atau login dengan</p>

            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                {{-- Name --}}
                <input type="text" name="name" placeholder="Nama Lengkap" class="auth-input" required>

                {{-- Email --}}
                <input type="email" name="email" placeholder="Email" class="auth-input" required>

                {{-- Password --}}
                <input type="password" name="password" placeholder="Password" class="auth-input" required>

                {{-- Confirm Password (must be named password_confirmation) --}}
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="auth-input" required>

                <button type="submit" class="auth-btn-primary">Daftar</button>
            </form>
            <p class="auth-terms">
                Dengan mendaftar, saya menyetujui
                <a href="#">Syarat & Ketentuan</a> serta <a href="#">Kebijakan Privasi Trade-In</a>
            </p>
        </div>
    </div>

</div>

</body>
</html>
