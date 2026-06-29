<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade-in | Verify</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/42dot-sans@5.2.9/index.css">
</head>
<body class="auth-body verify-body">

<div class="verify-modal">
    <h2 class="verify-title">Account Verification</h2>
    <p class="verify-sub">Masukan Kode 5 digit yang telah<br>dikirim ke email anda.</p>

    <form method="POST" action="{{ route('verify.post') }}" class="otp-form">
        @csrf
        <div class="otp-inputs">
            <input type="text" maxlength="1" class="otp-box" oninput="otpNext(this)">
            <input type="text" maxlength="1" class="otp-box" oninput="otpNext(this)">
            <input type="text" maxlength="1" class="otp-box" oninput="otpNext(this)">
            <input type="text" maxlength="1" class="otp-box" oninput="otpNext(this)">
            <input type="text" maxlength="1" class="otp-box" oninput="otpNext(this)">
        </div>
        <button type="submit" class="auth-btn-primary" style="width:100%;margin-top:20px">Verifikasi</button>
    </form>

    <p class="verify-resend">Tidak terima kode? <a href="#">Kirim Ulang</a></p>
</div>

<script>
function otpNext(el) {
    if (el.value.length === 1) {
        const next = el.nextElementSibling;
        if (next) next.focus();
    }
}
</script>

</body>
</html>
