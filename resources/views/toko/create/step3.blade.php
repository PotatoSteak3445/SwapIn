@extends('layouts.app')
@section('content')
<div style="max-width: 450px; margin: 60px auto; text-align: center;">
    <div style="display: flex; justify-content: center; gap: 12px; margin-bottom: 40px;">
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 24px; height: 12px; border-radius: 10px; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
    </div>

    <h2 style="font-weight: 800; margin-bottom: 8px;">Verifikasi Data Diri</h2>
    <p style="color: #888; font-size: 14px; margin-bottom: 30px;">Silahkan masukan foto KTP anda.</p>

    <div onclick="document.getElementById('face-modal').style.display='flex'" style="width: 100%; height: 200px; border: 2px dashed #ddd; border-radius: 15px; display: flex; align-items: center; justify-content: center; cursor: pointer; background: #f3f9fb;">
        <img src="https://img.icons8.com/ios/50/999999/id-card.png" alt="ID Icon">
    </div>

    <button onclick="document.getElementById('face-modal').style.display='flex'" class="btn-swap-main" style="width: 100%; margin-top: 32px;">Verifikasi</button>
</div>

{{-- FACE POPUP --}}
<div id="face-modal" style="display:none; position: fixed; inset: 0; background: rgba(0,0,0,0.6); align-items: center; justify-content: center; z-index: 1000;">
    <div style="background: #fff; padding: 40px; border-radius: 25px; width: 340px; text-align: center;">
        <h2 style="font-weight: 800; margin-bottom: 8px;">Verifikasi Wajah</h2>
        <p style="font-size: 12px; color: #888; margin-bottom: 24px;">Silahkan melakukan proses verifikasi wajah.</p>

        <div style="width: 140px; height: 140px; border-radius: 20px; background: #f3f9fb; margin: 0 auto 24px; display: flex; align-items: center; justify-content: center;">
            <img src="https://img.icons8.com/ios/70/cccccc/smiling-face.png">
        </div>

        <button onclick="window.location.href='{{ route('toko.step4') }}'" class="btn-swap-main" style="width: 100%;">Verifikasi</button>
    </div>
</div>
@endsection
