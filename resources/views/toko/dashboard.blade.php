<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwapIn | Seller Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/42dot-sans@5.2.9/index.css">
    <style>
        :root {
            --primary-green: #1a7a4a;
            --soft-green: #f0faf5;
            --border-color: #eef2f6;
            --text-main: #1a1a1a;
            --text-muted: #64748b;
        }

        body {
            background-color: #f8fafc; /* Slightly blue-grey background to make white cards pop */
            color: var(--text-main);
        }

        /* Modern Sidebar */
        .sidebar-nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 18px;
            margin: 4px 12px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-muted);
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .sidebar-nav-item:hover {
            background: var(--soft-green);
            color: var(--primary-green);
        }

        .sidebar-nav-item.active {
            background: var(--soft-green);
            color: var(--primary-green);
            border-left: 4px solid var(--primary-green);
            border-radius: 0 10px 10px 0;
            margin-left: 0;
            font-weight: 600;
        }

        /* Card Styling */
        .glass-card {
            background: #fff;
            border: 1px solid var(--border-color);
            border-radius: 20px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.01);
        }

        /* Product Image Preview */
        .img-preview {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            object-fit: cover;
            background: #f1f5f9;
        }

        /* Custom Button */
        .btn-add {
            background: var(--primary-green);
            color: white;
            padding: 10px 20px;
            border-radius: 12px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: transform 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-add:hover {
            transform: translateY(-2px);
            background: #155f3a;
        }

        .status-pill {
            padding: 4px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<header style="background:#fff; border-bottom:1px solid var(--border-color); position: sticky; top:0; z-index:100;">
    <div style="max-width:1400px; margin:0 auto; padding:12px 40px; display:flex; align-items:center; justify-content:space-between;">
        <div style="display:flex; align-items:center; gap:40px;">
            <a href="{{ route('home') }}" style="font-size:24px; font-weight:800; color:var(--primary-green); text-decoration:none;">SwapIn.</a>
            <div style="position:relative;">
                <input type="text" placeholder="Cari pesanan atau produk..." style="background:#f1f5f9; border:none; padding:10px 16px 10px 40px; border-radius:10px; width:300px; font-size:13px;">
                <svg style="position:absolute; left:12px; top:10px; color:#94a3b8;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/></svg>
            </div>
        </div>
        <div style="display:flex; align-items:center; gap:20px;">
            <div style="text-align:right;">
                <p style="font-size:14px; font-weight:700; margin:0;">{{ session('user_name', 'Toko Maju Jaya') }}</p>
                <p style="font-size:11px; color:var(--text-muted); margin:0;">Seller Pro</p>
            </div>
            <div style="width:40px; height:40px; border-radius:12px; background:var(--soft-green); display:flex; align-items:center; justify-content:center; color:var(--primary-green); font-weight:bold;">T</div>
        </div>
    </div>
</header>

<div style="max-width:1400px; margin:0 auto; padding:32px 40px; display:flex; gap:32px;">

    {{-- SIDEBAR --}}
    <aside style="width:260px; flex-shrink:0;">
        <div class="glass-card" style="padding:0; position: sticky; top:100px; overflow:hidden;">

            {{-- ADDED: TOKO SAYA HEADER SECTION --}}
            <div style="background: var(--primary-green); padding: 32px 20px; text-align: center; color: #fff;">
                <div style="width: 72px; height: 72px; border-radius: 50%; background: rgba(255, 255, 255, 0.2); margin: 0 auto 16px; display: flex; align-items: center; justify-content: center;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </div>
                <h3 style="font-size: 18px; font-weight: 700; margin: 0 0 4px;">Toko Saya</h3>
                <div style="font-size: 13px; color: rgba(255, 255, 255, 0.85); display: flex; align-items: center; justify-content: center; gap: 6px;">
                    <span style="color: #fbbf24;">★</span> 4.8 · 320 Terjual
                </div>
            </div>

            <div style="padding-top: 20px;">
                <div style="padding:0 24px 10px; margin-bottom:12px;">
                    <p style="font-size:11px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:1px;">Menu Utama</p>
                </div>

                <a href="#" class="sidebar-nav-item active">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="#" class="sidebar-nav-item">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    Produk Saya
                </a>
                <a href="#" class="sidebar-nav-item">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    Pesanan
                </a>

                <div style="padding:24px 24px 12px; border-top:1px solid var(--border-color); margin-top:12px;">
                    <p style="font-size:11px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:1px;">Lainnya</p>
                </div>
                <a href="#" class="sidebar-nav-item">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Pengaturan Toko
                </a>
                <a href="{{ route('home') }}" class="sidebar-nav-item" style="color:#ef4444; margin-bottom: 20px;">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    Keluar
                </a>
            </div>
        </div>
    </aside>

    {{-- MAIN CONTENT --}}
    <main style="flex:1; min-width:0;">

        <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:32px;">
            <div>
                <h2 style="font-size:28px; font-weight:800; margin:0 0 4px;">Ringkasan Toko</h2>
                <p style="color:var(--text-muted); margin:0;">Pantau performa penjualanmu hari ini.</p>
            </div>
            <a href="{{ route('toko.tambah-produk') }}" class="btn-add" style="text-decoration:none;">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Tambah Produk Baru
            </button></a>
        </div>

        {{-- Stat Cards --}}
        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px; margin-bottom:32px;">
            @php
            $stats = [
                ['label' => 'Total Pendapatan', 'value' => 'Rp 12.450.000', 'trend' => '+12.5%', 'color' => '#1a7a4a'],
                ['label' => 'Pesanan Baru', 'value' => '14', 'trend' => '+2', 'color' => '#3b82f6'],
                ['label' => 'Produk Aktif', 'value' => '48', 'trend' => 'Tetap', 'color' => '#6366f1'],
                ['label' => 'Rating Toko', 'value' => '4.9', 'trend' => '★ ★ ★ ★ ★', 'color' => '#f59e0b'],
            ];
            @endphp
            @foreach($stats as $s)
            <div class="glass-card" style="padding:24px;">
                <p style="font-size:13px; font-weight:600; color:var(--text-muted); margin:0 0 12px;">{{ $s['label'] }}</p>
                <h3 style="font-size:20px; font-weight:800; margin:0 0 8px; color:{{ $s['color'] }}">{{ $s['value'] }}</h3>
                <span style="font-size:12px; color:#10b981; font-weight:600;">{{ $s['trend'] }}</span>
            </div>
            @endforeach
        </div>

        {{-- Product Management Table --}}
        <div class="glass-card">
            <div style="padding:24px; border-bottom:1px solid var(--border-color); display:flex; justify-content:space-between; align-items:center;">
                <h3 style="font-size:18px; font-weight:700; margin:0;">Daftar Produk</h3>
                <div style="display:flex; gap:10px;">
                    <select style="padding:8px 12px; border-radius:8px; border:1px solid var(--border-color); font-family:inherit; font-size:13px; outline:none;">
                        <option>Semua Kategori</option>
                    </select>
                </div>
            </div>

            <div style="overflow-x:auto;">
                <table style="width:100%; border-collapse:collapse;">
                    <thead style="background:#f8fafc;">
                        <tr>
                            <th style="text-align:left; padding:16px 24px; font-size:12px; color:var(--text-muted); text-transform:uppercase;">Produk</th>
                            <th style="text-align:left; padding:16px 24px; font-size:12px; color:var(--text-muted); text-transform:uppercase;">Harga</th>
                            <th style="text-align:left; padding:16px 24px; font-size:12px; color:var(--text-muted); text-transform:uppercase;">Stok</th>
                            <th style="text-align:left; padding:16px 24px; font-size:12px; color:var(--text-muted); text-transform:uppercase;">Status</th>
                            <th style="text-align:right; padding:16px 24px; font-size:12px; color:var(--text-muted); text-transform:uppercase;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $products = [
                            ['name' => 'iPhone 13 Pro', 'cat' => 'Electronics', 'price' => 'Rp 14.500.000', 'stock' => 5, 'status' => 'Aktif'],
                            ['name' => 'Nike Air Jordan High', 'cat' => 'Fashion', 'price' => 'Rp 2.100.000', 'stock' => 0, 'status' => 'Habis'],
                            ['name' => 'MacBook Air M2', 'cat' => 'Electronics', 'price' => 'Rp 18.000.000', 'stock' => 2, 'status' => 'Aktif'],
                            ['name' => 'Sony WH-1000XM5', 'cat' => 'Audio', 'price' => 'Rp 4.200.000', 'stock' => 12, 'status' => 'Aktif'],
                        ];
                        @endphp
                        @foreach($products as $p)
                        <tr style="border-bottom:1px solid var(--border-color); transition: background 0.2s;" onmouseover="this.style.background='#fcfdfd'" onmouseout="this.style.background='transparent'">
                            <td style="padding:16px 24px;">
                                <div style="display:flex; align-items:center; gap:12px;">
                                    <img src="https://placehold.co/100x100?text=IMG" class="img-preview" alt="">
                                    <div>
                                        <p style="font-weight:700; margin:0; font-size:14px;">{{ $p['name'] }}</p>
                                        <p style="color:var(--text-muted); margin:0; font-size:12px;">{{ $p['cat'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding:16px 24px; font-weight:700; font-size:14px;">{{ $p['price'] }}</td>
                            <td style="padding:16px 24px; font-size:14px;">{{ $p['stock'] }} unit</td>
                            <td style="padding:16px 24px;">
                                <span class="status-pill" style="background:{{ $p['status']=='Aktif' ? '#dcfce7' : '#fee2e2' }}; color:{{ $p['status']=='Aktif' ? '#15803d' : '#b91c1c' }};">
                                    {{ $p['status'] }}
                                </span>
                            </td>
                            <td style="padding:16px 24px; text-align:right;">
                                <button style="background:none; border:none; color:var(--text-muted); cursor:pointer; padding:4px;">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </button>
                                <button style="background:none; border:none; color:#ef4444; cursor:pointer; padding:4px;">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="padding:20px 24px; text-align:center;">
                <a href="#" style="color:var(--primary-green); font-size:14px; font-weight:600; text-decoration:none;">Lihat Semua Produk &rsaquo;</a>
            </div>
        </div>

    </main>
</div>

</body>
</html>
