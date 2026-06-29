@extends('layouts.app')

@section('content')

{{-- HERO BANNER --}}
<section class="hero-banner">
    <div class="hero-content">
        <p class="hero-sub">Best Deal Online on smart watches</p>
        <h1>SMART WEARABLE.</h1>
        <p class="hero-discount">UP to 80% OFF</p>
    </div>
    <div class="hero-nav-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>

{{-- SMARTPHONES SECTION --}}
<section class="products-section">
    <div class="section-header">
        <h2>Grab the best deal on <span class="highlight">Smartphones</span></h2>
        <a href="#" class="view-all">View All &rsaquo;</a>
    </div>
    <div class="products-grid">
        @foreach($products as $product)
        <div class="product-card">
            {{-- Logic for discount badge --}}
            @if($product->old_price)
                @php
                    $discount = round((($product->old_price - $product->price) / $product->old_price) * 100);
                @endphp
                <span class="badge">{{ $discount }}% OFF</span>
            @endif

            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text={{ $product->name }}" alt="{{ $product->name }}">
            </div>

            <div class="product-info">
                <p class="product-name">{{ $product->name }}</p>
                <div class="product-prices">
                    <span class="price-current">Rp. {{ number_format($product->price, 0, ',', '.') }}</span>
                    @if($product->old_price)
                        <span class="price-old">Rp. {{ number_format($product->old_price, 0, ',', '.') }}</span>
                    @endif
                </div>
                <p class="price-save">Hemat – Rp. {{ number_format($product->old_price - $product->price, 0, ',', '.') }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- TOP CATEGORIES --}}
<section class="categories-section">
    <div class="section-header">
        <h2>Shop From <span class="highlight">Top Categories</span></h2>
        <a href="#" class="view-all">View All &rsaquo;</a>
    </div>
    <div class="categories-grid">
        <a href="#" class="category-item">
            <div class="category-icon">
                <img src="https://placehold.co/60x60/f0f0f0/333?text=📱" alt="Mobile">
            </div>
            <span>Mobile</span>
        </a>
        <a href="#" class="category-item">
            <div class="category-icon">
                <img src="https://placehold.co/60x60/f0f0f0/333?text=💄" alt="Cosmetics">
            </div>
            <span>Cosmetics</span>
        </a>
        <a href="#" class="category-item">
            <div class="category-icon">
                <img src="https://placehold.co/60x60/f0f0f0/333?text=💻" alt="Electronics">
            </div>
            <span>Electronics</span>
        </a>
        <a href="#" class="category-item">
            <div class="category-icon">
                <img src="https://placehold.co/60x60/f0f0f0/333?text=🛋️" alt="Furniture">
            </div>
            <span>Furniture</span>
        </a>
        <a href="#" class="category-item">
            <div class="category-icon">
                <img src="https://placehold.co/60x60/f0f0f0/333?text=⌚" alt="Watches">
            </div>
            <span>Watches</span>
        </a>
        <a href="#" class="category-item">
            <div class="category-icon">
                <img src="https://placehold.co/60x60/f0f0f0/333?text=🌿" alt="Decor">
            </div>
            <span>Decor</span>
        </a>
        <a href="#" class="category-item">
            <div class="category-icon">
                <img src="https://placehold.co/60x60/f0f0f0/333?text=💍" alt="Accessories">
            </div>
            <span>Accessories</span>
        </a>
    </div>
</section>

{{-- ELECTRONICS BRANDS --}}
<section class="brands-section">
    <div class="section-header">
        <h2>Top <span class="highlight">Electronics Brands</span></h2>
        <a href="#" class="view-all">View All &rsaquo;</a>
    </div>
    <div class="brands-grid">
        <div class="brand-card brand-dark">
            <div class="brand-info">
                <span class="brand-label">IPHONE</span>
                <div class="brand-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" viewBox="0 0 814 1000">
                        <path d="M788.1 340.9c-5.8 4.5-108.2 62.2-108.2 190.5 0 148.4 130.3 200.9 134.2 202.2-.6 3.2-20.7 71.9-68.7 141.9-42.8 61.6-87.5 123.1-155.5 123.1s-85.5-39.5-164-39.5c-76 0-103.7 40.8-165.9 40.8s-105-57.8-155.5-127.4C46 790.7 0 663 0 541.8c0-207.8 134.4-318 266.5-318 69.4 0 126.9 45.7 170.1 45.7 41.3 0 106.9-48.7 183.4-48.7zm-116.7-130.2c31.1-36.9 53.1-88.1 53.1-139.3 0-7.1-.6-14.3-1.9-20.1-50.6 1.9-110.8 33.7-147.1 75.8-28.5 32.4-55.1 83.6-55.1 135.5 0 7.8 1.3 15.6 1.9 18.1 3.2.6 8.4 1.3 13.6 1.3 45.4 0 102.5-30.4 135.5-71.3z"/>
                    </svg>
                </div>
            </div>
            <p class="brand-offer">UP to 80% OFF</p>
            <img src="https://placehold.co/120x140/1a1a2e/ffffff?text=iPhone" alt="iPhone" class="brand-phone">
        </div>

        <div class="brand-card brand-realme">
            <div class="brand-info">
                <span class="brand-label" style="color:#333">REALME</span>
                <div class="brand-logo-realme">
                    <span style="color:#FFD700; font-weight:800; font-size:22px; font-style:italic;">realme</span>
                </div>
            </div>
            <p class="brand-offer" style="color:#333">UP to 80% OFF</p>
            <img src="https://placehold.co/120x140/f5e6d3/333333?text=Realme" alt="Realme" class="brand-phone">
        </div>

        <div class="brand-card brand-xiaomi">
            <div class="brand-info">
                <span class="brand-label" style="color:#333">XIAOMI</span>
                <div class="brand-logo-mi">
                    <svg width="36" height="36" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="100" height="100" rx="20" fill="#FF6900"/>
                        <text x="50" y="68" text-anchor="middle" fill="white" font-size="48" font-weight="bold" font-family="Arial">mi</text>
                    </svg>
                </div>
            </div>
            <p class="brand-offer" style="color:#333">UP to 80% OFF</p>
            <img src="https://placehold.co/120x140/e8f0fe/333333?text=Xiaomi" alt="Xiaomi" class="brand-phone">
        </div>
    </div>
</section>

{{-- FOR YOU SECTION --}}
<section class="products-section">
    <div class="section-header">
        <h2>For <span class="highlight">You</span></h2>
        <a href="#" class="view-all">View All &rsaquo;</a>
    </div>
    <div class="products-grid for-you-grid">

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Printer" alt="Printer Canon">
            </div>
            <p class="product-name">Printer Canon</p>
            <span class="price-current">Rp.1.222.000</span>
            <p class="product-variant">Warna Hitam</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Mesin+Cuci" alt="Mesin Cuci Panasonic">
            </div>
            <p class="product-name">Mesin Cuci Panasonic</p>
            <span class="price-current">Rp.800.000</span>
            <p class="product-variant">Warna Cyan</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Lemari" alt="Lemari 3 Pintu Geser">
            </div>
            <p class="product-name">Lemari 3 Pintu Geser</p>
            <span class="price-current">Rp.500.000</span>
            <p class="product-variant">Warna Coklat</p>
        </div>

        <div class="product-card">
            <span class="badge">23% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Smartwatch" alt="Apple Smartwatch Series 3">
            </div>
            <p class="product-name">Apple Smartwatch Series 3</p>
            <div class="product-prices">
                <span class="price-current">Rp.940.940</span>
                <span class="price-old">Rp.1.222.000</span>
            </div>
            <p class="price-save">Hemat – Rp.281.060</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Setrika" alt="Setrika Philips">
            </div>
            <p class="product-name">Setrika Philips</p>
            <span class="price-current">Rp.120.000</span>
            <p class="product-variant">Warna Biru</p>
        </div>

        <div class="product-card">
            <span class="badge">14% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Sofa" alt="Sofa Tunggal">
            </div>
            <p class="product-name">Sofa Tunggal</p>
            <div class="product-prices">
                <span class="price-current">Rp.516.000</span>
                <span class="price-old">Rp.600.000</span>
            </div>
            <p class="price-save">Hemat – Rp.2999</p>
        </div>

        <div class="product-card">
            <span class="badge">44% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Hair+Dryer" alt="Hair Dryer Gosonic">
            </div>
            <p class="product-name">Hair Dryer Gosonic</p>
            <div class="product-prices">
                <span class="price-current">Rp.100.000</span>
                <span class="price-old">Rp.180.000</span>
            </div>
            <p class="price-save">Warna Hitam</p>
        </div>

        <div class="product-card">
            <span class="badge">30% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Nakas" alt="Nakas 2 Tingkat">
            </div>
            <p class="product-name">Nakas 2 Tingkat</p>
            <div class="product-prices">
                <span class="price-current">Rp.84.000</span>
                <span class="price-old">Rp.150.000</span>
            </div>
            <p class="price-save">Hemat – Rp.66.000</p>
        </div>

        <div class="product-card">
            <span class="badge">30% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Rak+Piring" alt="Rak Piring">
            </div>
            <p class="product-name">Rak Piring</p>
            <div class="product-prices">
                <span class="price-current">Rp.49.000</span>
                <span class="price-old">Rp.70.000</span>
            </div>
            <p class="price-save">Hemat – Rp.21.000</p>
        </div>

        <div class="product-card">
            <span class="badge">8% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Kursi" alt="Kursi Kantor Premium">
            </div>
            <p class="product-name">Kursi Kantor Premium</p>
            <div class="product-prices">
                <span class="price-current">Rp.644.000</span>
                <span class="price-old">Rp.700.000</span>
            </div>
            <p class="price-save">Hemat – Rp.56.000</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Meja+Rias" alt="Meja Rias Antik">
            </div>
            <p class="product-name">Meja Rias Antik</p>
            <span class="price-current">Rp.430.000</span>
            <p class="product-variant">Barang antik tahun 1950</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Rak+Buku" alt="Rak Buku Kayu Jati">
            </div>
            <p class="product-name">Rak Buku Kayu Jati</p>
            <span class="price-current">Rp.200.000</span>
            <p class="product-variant">Tipe 5 Tingkat</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Shower" alt="Shower Mandi">
            </div>
            <p class="product-name">Shower Mandi</p>
            <span class="price-current">Rp.25.000</span>
            <p class="product-variant">Anti Karat</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Lemari+Display" alt="Lemari Display">
            </div>
            <p class="product-name">Lemari Display</p>
            <span class="price-current">Rp.500.000</span>
            <p class="product-variant">Tipe 4 Pintu</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Gantungan" alt="Gantungan Baju">
            </div>
            <p class="product-name">Gantungan Baju</p>
            <span class="price-current">Rp.30.000</span>
            <p class="product-variant">Warna Coklat Kayu</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Kaos" alt="Kaos Wanita">
            </div>
            <p class="product-name">Kaos Wanita</p>
            <span class="price-current">Rp.55.000</span>
            <p class="product-variant">Size XL</p>
        </div>

        <div class="product-card">
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Baju+Garis" alt="Baju Garis-Garis Wanita">
            </div>
            <p class="product-name">Baju Garis-Garis Wanita</p>
            <span class="price-current">Rp.70.000</span>
            <p class="product-variant">Size L</p>
        </div>

        <div class="product-card">
            <span class="badge">20% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Kemeja" alt="Kemeja Wanita">
            </div>
            <p class="product-name">Kemeja Wanita</p>
            <div class="product-prices">
                <span class="price-current">Rp.72.000</span>
                <span class="price-old">Rp.90.000</span>
            </div>
            <p class="price-save">Hemat – Rp.18.000</p>
        </div>

        <div class="product-card">
            <span class="badge">30% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Sweater" alt="Sweater">
            </div>
            <p class="product-name">Sweater</p>
            <div class="product-prices">
                <span class="price-current">Rp.84.000</span>
                <span class="price-old">Rp.120.000</span>
            </div>
            <p class="price-save">Hemat – Rp.36.000</p>
        </div>

        <div class="product-card">
            <span class="badge">25% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Blouse" alt="Blouse Wanita">
            </div>
            <p class="product-name">Blouse Wanita</p>
            <div class="product-prices">
                <span class="price-current">Rp.116.000</span>
                <span class="price-old">Rp.155.000</span>
            </div>
            <p class="price-save">Hemat – Rp.38.750</p>
        </div>

        <div class="product-card">
            <span class="badge">30% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Blender" alt="Blender Philips">
            </div>
            <p class="product-name">Blender Philips</p>
            <div class="product-prices">
                <span class="price-current">Rp.315.000</span>
                <span class="price-old">Rp.450.000</span>
            </div>
            <p class="price-save">Hemat – Rp.135.000</p>
        </div>

        <div class="product-card">
            <span class="badge">66% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Airfryer" alt="Airfryer Philips">
            </div>
            <p class="product-name">Airfryer Philips</p>
            <div class="product-prices">
                <span class="price-current">Rp.312.000</span>
                <span class="price-old">Rp.710.000</span>
            </div>
            <p class="price-save">Hemat – Rp.397.000</p>
        </div>

        <div class="product-card">
            <span class="badge">20% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Oven" alt="Oven">
            </div>
            <p class="product-name">Oven</p>
            <div class="product-prices">
                <span class="price-current">Rp.640.000</span>
                <span class="price-old">Rp.800.000</span>
            </div>
            <p class="price-save">Hemat – Rp.160.000</p>
        </div>

        <div class="product-card">
            <span class="badge">15% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Kompor" alt="Kompor">
            </div>
            <p class="product-name">Kompor</p>
            <div class="product-prices">
                <span class="price-current">Rp.297.000</span>
                <span class="price-old">Rp.350.000</span>
            </div>
            <p class="price-save">Hemat – Rp.52.500</p>
        </div>

        <div class="product-card">
            <span class="badge">5% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Chopper" alt="Chopper">
            </div>
            <p class="product-name">Chopper</p>
            <div class="product-prices">
                <span class="price-current">Rp.95.000</span>
                <span class="price-old">Rp.100.000</span>
            </div>
            <p class="price-save">Hemat – Rp.5.000</p>
        </div>

        <div class="product-card">
            <span class="badge">5% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Sit+Up" alt="Sit Up Stanf">
            </div>
            <p class="product-name">Sit Up Stanf</p>
            <div class="product-prices">
                <span class="price-current">Rp.81.700</span>
                <span class="price-old">Rp.86.000</span>
            </div>
            <p class="price-save">Hemat – Rp.4.300</p>
        </div>

        <div class="product-card">
            <span class="badge">35% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Sarung+Tinju" alt="Sarung Tinju">
            </div>
            <p class="product-name">Sarung Tinju</p>
            <div class="product-prices">
                <span class="price-current">Rp.169.000</span>
                <span class="price-old">Rp.260.000</span>
            </div>
            <p class="price-save">Hemat – Rp.91.000</p>
        </div>

        <div class="product-card">
            <span class="badge">40% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Treadmill" alt="Treadmill">
            </div>
            <p class="product-name">Treadmill</p>
            <div class="product-prices">
                <span class="price-current">Rp.1.200.000</span>
                <span class="price-old">Rp.720.000</span>
            </div>
            <p class="price-save">Hemat – Rp.480.000</p>
        </div>

        <div class="product-card">
            <span class="badge">10% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Barbel" alt="Barbel 3KG">
            </div>
            <p class="product-name">Barbel 3KG</p>
            <div class="product-prices">
                <span class="price-current">Rp.40.500</span>
                <span class="price-old">Rp.45.000</span>
            </div>
            <p class="price-save">Hemat – Rp.4.500</p>
        </div>

        <div class="product-card selected">
            <span class="badge">5% OFF</span>
            <div class="product-img-wrap">
                <img src="https://placehold.co/160x160/f5f5f5/333?text=Tali+Skipping" alt="Tali Skipping">
            </div>
            <p class="product-name">Tali Skipping</p>
            <div class="product-prices">
                <span class="price-current">Rp.19.000</span>
                <span class="price-old">Rp.20.000</span>
            </div>
            <p class="price-save">Hemat – Rp.1.000</p>
        </div>

    </div>
</section>

@endsection
