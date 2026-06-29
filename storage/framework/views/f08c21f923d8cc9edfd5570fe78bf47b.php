<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade-in | Tambah Produk</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
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
            background-color: #f8fafc;
            color: var(--text-main);
        }

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

        .glass-card {
            background: #fff;
            border: 1px solid var(--border-color);
            border-radius: 20px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.02), 0 2px 4px -1px rgba(0,0,0,0.01);
        }

        .btn-primary {
            background: var(--primary-green);
            color: white;
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            font-family: inherit;
            display: flex;
            align-items: center;
            gap: 8px;
            border: none;
            cursor: pointer;
            transition: transform 0.2s, background 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            background: #155f3a;
        }

        .btn-secondary {
            background: #f1f5f9;
            color: var(--text-muted);
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            font-family: inherit;
            border: 1px solid var(--border-color);
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-secondary:hover {
            background: #e2e8f0;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-main);
            margin-bottom: 8px;
        }

        .form-hint {
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 6px;
        }

        .form-input {
            width: 100%;
            border: 1.5px solid var(--border-color);
            border-radius: 10px;
            padding: 11px 16px;
            font-size: 14px;
            font-family: inherit;
            color: var(--text-main);
            background: #fff;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
            box-sizing: border-box;
        }

        .form-input:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.08);
        }

        .form-input::placeholder {
            color: #cbd5e1;
        }

        textarea.form-input {
            resize: vertical;
            min-height: 120px;
        }

        select.form-input {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%2364748b' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            padding-right: 40px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .upload-area {
            border: 2px dashed var(--border-color);
            border-radius: 14px;
            padding: 40px 24px;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
            background: #fafafa;
        }

        .upload-area:hover {
            border-color: var(--primary-green);
            background: var(--soft-green);
        }

        .upload-area input[type="file"] {
            display: none;
        }

        .image-preview-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-top: 16px;
        }

        .image-slot {
            aspect-ratio: 1;
            border-radius: 12px;
            border: 1.5px dashed var(--border-color);
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8fafc;
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
            position: relative;
            overflow: hidden;
        }

        .image-slot:hover {
            border-color: var(--primary-green);
            background: var(--soft-green);
        }

        .image-slot.filled {
            border-style: solid;
            border-color: var(--border-color);
        }

        .image-slot img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-slot .remove-btn {
            position: absolute;
            top: 6px;
            right: 6px;
            background: rgba(0,0,0,0.5);
            color: white;
            border: none;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            font-size: 12px;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .image-slot:hover .remove-btn {
            display: flex;
        }

        .radio-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .radio-card {
            flex: 1;
            min-width: 120px;
            border: 1.5px solid var(--border-color);
            border-radius: 12px;
            padding: 14px 16px;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            font-weight: 500;
        }

        .radio-card input[type="radio"] {
            accent-color: var(--primary-green);
            width: 16px;
            height: 16px;
        }

        .radio-card:has(input:checked) {
            border-color: var(--primary-green);
            background: var(--soft-green);
            color: var(--primary-green);
        }

        .price-prefix {
            position: relative;
        }

        .price-prefix span {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 14px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .price-prefix input {
            padding-left: 52px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--text-main);
            margin: 0 0 20px;
            padding-bottom: 14px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title svg {
            color: var(--primary-green);
        }

        .tag-input-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            border: 1.5px solid var(--border-color);
            border-radius: 10px;
            padding: 10px 12px;
            min-height: 46px;
            align-items: center;
            cursor: text;
            transition: border-color 0.2s;
        }

        .tag-input-wrap:focus-within {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.08);
        }

        .tag {
            background: var(--soft-green);
            color: var(--primary-green);
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .tag button {
            background: none;
            border: none;
            color: var(--primary-green);
            cursor: pointer;
            font-size: 14px;
            line-height: 1;
            padding: 0;
        }

        .tag-input-wrap input {
            border: none;
            outline: none;
            font-family: inherit;
            font-size: 14px;
            flex: 1;
            min-width: 100px;
            color: var(--text-main);
        }

        .step-indicator {
            display: flex;
            align-items: center;
            gap: 0;
            margin-bottom: 32px;
        }

        .step {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            font-weight: 600;
        }

        .step-num {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
        }

        .step.done .step-num { background: var(--primary-green); color: white; }
        .step.active .step-num { background: var(--primary-green); color: white; box-shadow: 0 0 0 4px rgba(26,122,74,0.15); }
        .step.pending .step-num { background: #e2e8f0; color: #94a3b8; }
        .step.done span, .step.active span { color: var(--primary-green); }
        .step.pending span { color: #94a3b8; }

        .step-line {
            flex: 1;
            height: 2px;
            background: var(--border-color);
            margin: 0 12px;
        }

        .step-line.done { background: var(--primary-green); }
    </style>
</head>
<body>


<header style="background:#fff; border-bottom:1px solid var(--border-color); position:sticky; top:0; z-index:100;">
    <div style="max-width:1400px; margin:0 auto; padding:12px 40px; display:flex; align-items:center; justify-content:space-between;">
        <div style="display:flex; align-items:center; gap:40px;">
            <a href="<?php echo e(route('home')); ?>" style="font-size:24px; font-weight:800; color:var(--primary-green); text-decoration:none;">Trade-in.</a>
        </div>
        <div style="display:flex; align-items:center; gap:20px;">
            <div style="text-align:right;">
                <p style="font-size:14px; font-weight:700; margin:0;"><?php echo e(session('user_name', 'Toko Maju Jaya')); ?></p>
                <p style="font-size:11px; color:var(--text-muted); margin:0;">Seller Pro</p>
            </div>
            <div style="width:40px; height:40px; border-radius:12px; background:var(--soft-green); display:flex; align-items:center; justify-content:center; color:var(--primary-green); font-weight:bold; font-size:18px;">T</div>
        </div>
    </div>
</header>

<div style="max-width:1400px; margin:0 auto; padding:32px 40px; display:flex; gap:32px;">

    
    <aside style="width:260px; flex-shrink:0;">
        <div class="glass-card" style="padding:0; position:sticky; top:100px; overflow:hidden;">
            <div style="background:var(--primary-green); padding:32px 20px; text-align:center; color:#fff;">
                <div style="width:72px; height:72px; border-radius:50%; background:rgba(255,255,255,0.2); margin:0 auto 16px; display:flex; align-items:center; justify-content:center;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </div>
                <h3 style="font-size:18px; font-weight:700; margin:0 0 4px;">Toko Saya</h3>
                <div style="font-size:13px; color:rgba(255,255,255,0.85); display:flex; align-items:center; justify-content:center; gap:6px;">
                    <span style="color:#fbbf24;">★</span> 4.8 · 320 Terjual
                </div>
            </div>
            <div style="padding-top:20px;">
                <div style="padding:0 24px 10px; margin-bottom:12px;">
                    <p style="font-size:11px; font-weight:700; color:#94a3b8; text-transform:uppercase; letter-spacing:1px;">Menu Utama</p>
                </div>
                <a href="<?php echo e(route('toko.dashboard')); ?>" class="sidebar-nav-item">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="#" class="sidebar-nav-item active">
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
                <a href="<?php echo e(route('home')); ?>" class="sidebar-nav-item" style="color:#ef4444; margin-bottom:20px;">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    Keluar
                </a>
            </div>
        </div>
    </aside>

    
    <main style="flex:1; min-width:0;">

        
        <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:32px;">
            <div>
                <div style="display:flex; align-items:center; gap:10px; margin-bottom:6px;">
                    <a href="<?php echo e(route('toko.dashboard')); ?>" style="color:var(--text-muted); font-size:13px; text-decoration:none; display:flex; align-items:center; gap:4px;">
                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        Dashboard
                    </a>
                    <span style="color:#cbd5e1; font-size:13px;">/</span>
                    <span style="color:var(--primary-green); font-size:13px; font-weight:600;">Tambah Produk</span>
                </div>
                <h2 style="font-size:28px; font-weight:800; margin:0 0 4px;">Tambah Produk Baru</h2>
                <p style="color:var(--text-muted); margin:0; font-size:14px;">Isi semua informasi produk yang ingin kamu jual.</p>
            </div>
        </div>

        
        <div class="step-indicator">
            <div class="step active">
                <div class="step-num">1</div>
                <span>Info Produk</span>
            </div>
            <div class="step-line done"></div>
            <div class="step pending">
                <div class="step-num">2</div>
                <span>Harga & Stok</span>
            </div>
            <div class="step-line"></div>
            <div class="step pending">
                <div class="step-num">3</div>
                <span>Pengiriman</span>
            </div>
            <div class="step-line"></div>
            <div class="step pending">
                <div class="step-num">4</div>
                <span>Selesai</span>
            </div>
        </div>

        <form method="POST" action="#" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        
        <div class="glass-card" style="padding:28px; margin-bottom:20px;">
            <h3 class="section-title">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                Foto Produk
            </h3>

            <input type="file" id="foto-upload" multiple accept="image/*" style="display:none;" onchange="previewImages(this)">

                        <div style="display:grid; grid-template-columns:200px 1fr; gap:16px; align-items:stretch;">

                            
                            <div class="upload-area" onclick="document.getElementById('foto-upload').click()" style="min-height:180px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                                <svg width="36" height="36" fill="none" stroke="#cbd5e1" viewBox="0 0 24 24" style="margin-bottom:10px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                                <p style="font-size:13px; font-weight:600; color:var(--text-muted); margin:0 0 4px;">Klik untuk upload foto</p>
                                <p style="font-size:11px; color:#cbd5e1; margin:0; text-align:center;">PNG, JPG hingga 5MB.<br>Maks 8 foto.</p>
                            </div>

                            
                            <div class="image-preview-grid" id="preview-grid" style="grid-template-columns:repeat(4,1fr); align-content:start;">
                                <?php for($i = 0; $i < 4; $i++): ?>
                                <div class="image-slot" onclick="document.getElementById('foto-upload').click()">
                                    <svg width="22" height="22" fill="none" stroke="#cbd5e1" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"/></svg>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>

                        <p class="form-hint" style="margin-top:12px;">Foto pertama akan jadi foto utama produk. Gunakan foto dengan latar putih untuk hasil terbaik.</p>
        </div>

        
        <div class="glass-card" style="padding:28px; margin-bottom:20px;">
            <h3 class="section-title">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                Informasi Dasar
            </h3>

            <div class="form-group">
                <label class="form-label">Nama Produk <span style="color:#ef4444;">*</span></label>
                <input type="text" name="nama" class="form-input" placeholder="Contoh: Sepatu Nike Air Max 270 Original">
                <p class="form-hint">Gunakan nama yang jelas dan spesifik. Maks 255 karakter.</p>
            </div>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
                <div class="form-group" style="margin-bottom:0;">
                    <label class="form-label">Kategori <span style="color:#ef4444;">*</span></label>
                    <select name="kategori" class="form-input">
                        <option value="" disabled selected>Pilih kategori...</option>
                        <option>Electronics</option>
                        <option>Fashion</option>
                        <option>Home & Kitchen</option>
                        <option>Sports & Outdoor</option>
                        <option>Beauty & Care</option>
                        <option>Furniture</option>
                        <option>Aksesoris</option>
                        <option>Lainnya</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label class="form-label">Sub-Kategori</label>
                    <select name="sub_kategori" class="form-input">
                        <option value="" disabled selected>Pilih sub-kategori...</option>
                        <option>Pilih kategori dahulu</option>
                    </select>
                </div>
            </div>

            <div class="form-group" style="margin-top:24px;">
                <label class="form-label">Kondisi Produk <span style="color:#ef4444;">*</span></label>
                <div class="radio-group">
                    <label class="radio-card">
                        <input type="radio" name="kondisi" value="baru" checked>
                        <div>
                            <div style="font-weight:600; font-size:14px;">Baru</div>
                            <div style="font-size:12px; color:var(--text-muted);">Belum pernah dipakai</div>
                        </div>
                    </label>
                    <label class="radio-card">
                        <input type="radio" name="kondisi" value="bekas">
                        <div>
                            <div style="font-weight:600; font-size:14px;">Bekas</div>
                            <div style="font-size:12px; color:var(--text-muted);">Sudah pernah dipakai</div>
                        </div>
                    </label>
                    <label class="radio-card">
                        <input type="radio" name="kondisi" value="refurbished">
                        <div>
                            <div style="font-weight:600; font-size:14px;">Refurbished</div>
                            <div style="font-size:12px; color:var(--text-muted);">Diperbaiki/diperbarui</div>
                        </div>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Deskripsi Produk <span style="color:#ef4444;">*</span></label>
                <textarea name="deskripsi" class="form-input" placeholder="Jelaskan produkmu secara detail — ukuran, warna, bahan, keunggulan, dll."></textarea>
                <p class="form-hint">Minimal 100 karakter. Deskripsi yang baik meningkatkan kepercayaan pembeli.</p>
            </div>

            <div class="form-group" style="margin-bottom:0;">
                <label class="form-label">Tag / Kata Kunci</label>
                <div class="tag-input-wrap" id="tag-wrap">
                    <div class="tag">Nike <button type="button" onclick="removeTag(this)">×</button></div>
                    <div class="tag">Sepatu <button type="button" onclick="removeTag(this)">×</button></div>
                    <input type="text" placeholder="Ketik lalu tekan Enter..." onkeydown="addTag(event, this)" style="min-width:150px;">
                </div>
                <p class="form-hint">Tag membantu produkmu lebih mudah ditemukan. Tekan Enter untuk menambah.</p>
            </div>
        </div>

        
        <div class="glass-card" style="padding:28px; margin-bottom:20px;">
            <h3 class="section-title">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                Harga & Stok
            </h3>

            <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:20px; margin-bottom:24px;">
                <div class="form-group" style="margin-bottom:0;">
                    <label class="form-label">Harga Normal <span style="color:#ef4444;">*</span></label>
                    <div class="price-prefix">
                        <span>Rp</span>
                        <input type="number" name="harga" class="form-input" placeholder="0">
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label class="form-label">Harga Coret <span style="color:#94a3b8; font-weight:400;">(opsional)</span></label>
                    <div class="price-prefix">
                        <span>Rp</span>
                        <input type="number" name="harga_coret" class="form-input" placeholder="0">
                    </div>
                    <p class="form-hint">Harga sebelum diskon</p>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label class="form-label">Stok <span style="color:#ef4444;">*</span></label>
                    <input type="number" name="stok" class="form-input" placeholder="0" min="0">
                </div>
            </div>

            <div class="form-group" style="margin-bottom:0;">
                <label class="form-label">Varian Produk <span style="color:#94a3b8; font-weight:400;">(opsional)</span></label>
                <div style="border:1.5px dashed var(--border-color); border-radius:12px; padding:20px; text-align:center; cursor:pointer; transition:all 0.2s;" onmouseover="this.style.borderColor='var(--primary-green)'; this.style.background='var(--soft-green)'" onmouseout="this.style.borderColor='var(--border-color)'; this.style.background='transparent'">
                    <svg width="24" height="24" fill="none" stroke="#94a3b8" viewBox="0 0 24 24" style="margin:0 auto 8px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <p style="font-size:14px; font-weight:600; color:var(--text-muted); margin:0 0 4px;">Tambah Varian</p>
                    <p style="font-size:12px; color:#cbd5e1; margin:0;">Contoh: Ukuran (S, M, L, XL) atau Warna (Hitam, Putih)</p>
                </div>
            </div>
        </div>

        
        <div class="glass-card" style="padding:28px; margin-bottom:32px;">
            <h3 class="section-title">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/></svg>
                Info Pengiriman
            </h3>

            <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom:24px;">
                <div class="form-group" style="margin-bottom:0;">
                    <label class="form-label">Berat Produk <span style="color:#ef4444;">*</span></label>
                    <div style="position:relative;">
                        <input type="number" name="berat" class="form-input" placeholder="0" style="padding-right:52px;">
                        <span style="position:absolute; right:14px; top:50%; transform:translateY(-50%); font-size:13px; font-weight:600; color:var(--text-muted);">gram</span>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:0;">
                    <label class="form-label">Lokasi Pengiriman <span style="color:#ef4444;">*</span></label>
                    <input type="text" name="lokasi" class="form-input" placeholder="Contoh: Yogyakarta, DIY">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Dimensi <span style="color:#94a3b8; font-weight:400;">(opsional)</span></label>
                <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:12px;">
                    <div style="position:relative;">
                        <input type="number" name="panjang" class="form-input" placeholder="Panjang" style="padding-right:40px;">
                        <span style="position:absolute; right:12px; top:50%; transform:translateY(-50%); font-size:12px; color:var(--text-muted);">cm</span>
                    </div>
                    <div style="position:relative;">
                        <input type="number" name="lebar" class="form-input" placeholder="Lebar" style="padding-right:40px;">
                        <span style="position:absolute; right:12px; top:50%; transform:translateY(-50%); font-size:12px; color:var(--text-muted);">cm</span>
                    </div>
                    <div style="position:relative;">
                        <input type="number" name="tinggi" class="form-input" placeholder="Tinggi" style="padding-right:40px;">
                        <span style="position:absolute; right:12px; top:50%; transform:translateY(-50%); font-size:12px; color:var(--text-muted);">cm</span>
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-bottom:0;">
                <label class="form-label">Layanan Pengiriman</label>
                <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:10px;">
                    <?php $__currentLoopData = ['JNE', 'J&T', 'SiCepat', 'Anteraja', 'GoSend', 'GrabExpress', 'Ninja Xpress', 'POS Indonesia']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kurir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label style="display:flex; align-items:center; gap:8px; padding:10px 14px; border:1.5px solid var(--border-color); border-radius:10px; cursor:pointer; font-size:13px; transition:all 0.2s;" onmouseover="this.style.borderColor='var(--primary-green)'" onmouseout="if(!this.querySelector('input').checked) this.style.borderColor='var(--border-color)'">
                        <input type="checkbox" name="kurir[]" value="<?php echo e($kurir); ?>" style="accent-color:var(--primary-green);">
                        <?php echo e($kurir); ?>

                    </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        
        <div style="display:flex; justify-content:flex-end; gap:12px; padding-bottom:40px;">
            <button type="button" class="btn-secondary" onclick="window.history.back()">Batal</button>
            <button type="button" class="btn-secondary" style="border-color:var(--primary-green); color:var(--primary-green);">
                Simpan sebagai Draft
            </button>
            <button type="submit" class="btn-primary">
                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Terbitkan Produk
            </button>
        </div>

        </form>
    </main>
</div>

<script>
function previewImages(input) {
    const grid = document.getElementById('preview-grid');
    grid.innerHTML = '';
    const files = Array.from(input.files).slice(0, 8);
    files.forEach((file, i) => {
        const reader = new FileReader();
        reader.onload = e => {
            const slot = document.createElement('div');
            slot.className = 'image-slot filled';
            slot.innerHTML = `
                <img src="${e.target.result}" alt="preview">
                <button class="remove-btn" type="button" onclick="this.parentElement.remove()">×</button>
                ${i === 0 ? '<span style="position:absolute;bottom:6px;left:6px;background:var(--primary-green);color:#fff;font-size:10px;font-weight:700;padding:2px 7px;border-radius:4px;">Utama</span>' : ''}
            `;
            grid.appendChild(slot);
        };
        reader.readAsDataURL(file);
    });

    // fill remaining empty slots
    for (let i = files.length; i < 4; i++) {
        const slot = document.createElement('div');
        slot.className = 'image-slot';
        slot.onclick = () => document.getElementById('foto-upload').click();
        slot.innerHTML = `<svg width="22" height="22" fill="none" stroke="#cbd5e1" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"/></svg>`;
        grid.appendChild(slot);
    }
}

function addTag(e, input) {
    if (e.key === 'Enter' && input.value.trim()) {
        e.preventDefault();
        const wrap = document.getElementById('tag-wrap');
        const tag = document.createElement('div');
        tag.className = 'tag';
        tag.innerHTML = `${input.value.trim()} <button type="button" onclick="removeTag(this)">×</button>`;
        wrap.insertBefore(tag, input);
        input.value = '';
    }
}

function removeTag(btn) {
    btn.parentElement.remove();
}
</script>

</body>
</html>
<?php /**PATH /home/potato/Documents/SEMESTER 6 /trade-in/resources/views/toko/tambah-produk.blade.php ENDPATH**/ ?>