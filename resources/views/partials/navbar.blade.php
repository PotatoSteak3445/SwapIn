<header class="header">
    <div class="top-bar">
    <div class="top-bar-inner">
        <span>Selamat Datang!</span>
        <div class="top-bar-right">
            <span>📍 Deliver to 423651</span>
            <span>📦 Track your order</span>
            <span>🏷️ All Offers</span>
        </div>
    </div>
</div>
<div class="navbar">
<div class="navbar-inner">
    <a href="/" class="logo">SwapIn</a>
        <div class="search-bar">
            <input type="text" placeholder="Search essentials, groceries and more...">
            <button class="search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
                </svg>
            </button>
        </div>

        <div class="nav-icons">
            @auth
                {{-- Show this if user IS logged in --}}
                <div class="nav-icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z"/>
                    </svg>
                    <span>{{ Auth::user()->name }}</span>
                </div>

                <a href="{{ route('toko.dashboard') }}" class="nav-icon-link">
                    <span>Toko Saya</span>
                </a>

                <form action="{{ route('logout') }}" method="POST" style="margin:0;">
                    @csrf
                    <button type="submit" class="nav-icon-link" style="border:none; cursor:pointer; background:#fff0f0; color:#ef4444;">
                        Logout
                    </button>
                </form>
            @endauth

            @guest
                {{-- Show this if user is NOT logged in --}}
                <button onclick="document.getElementById('login-modal').classList.add('active')" class="nav-icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM12 14a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7z"/>
                    </svg>
                    <span>Sign Up / Sign In</span>
                </button>
            @endguest
        </div>
    </div>
</div>

    <nav class="category-nav">
        <ul>
            <li class="active"><a href="#">Groceries ▾</a></li>
            <li><a href="#">Premium Fruits ▾</a></li>
            <li><a href="#">Home & Kitchen ▾</a></li>
            <li><a href="#">Fashion ▾</a></li>
            <li><a href="#">Electronics ▾</a></li>
            <li><a href="#">Beauty ▾</a></li>
            <li><a href="#">Home Improvement ▾</a></li>
            <li><a href="#">Sports, Toys & Luggage ▾</a></li>
        </ul>
    </nav>
</header>
{{-- LOGIN MODAL --}}
<div id="login-modal" class="modal-overlay" onclick="if(event.target===this)this.classList.remove('active')">
    <div class="modal-box">
        <div class="modal-header">
            <h2>Masuk</h2>
            <a href="{{ route('register') }}" class="modal-register-link">Register</a>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            {{-- name="email" is very important --}}
            <input type="email" name="email" placeholder="Email" class="modal-input" required>

            {{-- name="password" is very important --}}
            <input type="password" name="password" placeholder="Password" class="modal-input" required>

            <button type="submit" class="modal-btn-primary">Login</button>
        </form>
        <p class="modal-or">Atau login dengan</p>
        <button class="modal-btn-google">
            <svg width="18" height="18" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
            Google
        </button>
    </div>
</div>
