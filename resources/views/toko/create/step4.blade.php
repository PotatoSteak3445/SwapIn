@extends('layouts.app')

@section('content')
<div style="max-width: 450px; margin: 60px auto; text-align: center;">
    {{-- Progress Dots (Step 4 active) --}}
    <div style="display: flex; justify-content: center; gap: 12px; margin-bottom: 40px;">
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 24px; height: 12px; border-radius: 10px; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
    </div>

    <h2 style="font-weight: 800; margin-bottom: 32px;">Tambah Rekening Bank</h2>

    {{-- Change method to POST and action to the store route --}}
    <form action="{{ route('toko.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
        @csrf {{-- Don't forget this for security! --}}

        <input type="text" name="bank_name" placeholder="Nama Bank" style="width:100%; padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;" required>
        <input type="text" name="bank_account" placeholder="Nomor Rekening" style="width:100%; padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;" required>

        <div style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 12px;">
             <input type="text" placeholder="Date (MM/YY)" style="padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;">
             <input type="text" placeholder="CVV" style="padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;">
        </div>

        <button type="submit" class="btn-swap-main" style="margin-top: 20px;">
            Selesaikan Pendaftaran
        </button>
        <p style="font-size: 11px; color: #888; margin-top: 16px;">
            Dengan mendaftar, saya menyetujui <br>
            <a href="#" style="color: #1a7a4a; font-weight: 700;">Syarat & Ketentuan</a> serta <a href="#" style="color: #1a7a4a; font-weight: 700;">Kebijakan Privasi SwapIn</a>
        </p>
    </form>
</div>
@endsection
