<?php $__env->startSection('content'); ?>
<style>
    .otp-container {
        display: flex;
        gap: 12px;
        justify-content: center;
        margin-bottom: 32px;
    }

    .otp-input {
        width: 60px;
        height: 64px;
        border: none;
        background: #f3f9fb; /* Match your Figma */
        border-radius: 12px;
        text-align: center;
        font-size: 24px;
        font-weight: 800;
        color: #1a7a4a;
        outline: none;
        transition: all 0.2s;
        border: 2px solid transparent;
    }

    .otp-input:focus {
        border-color: #1a7a4a;
        background: #fff;
        box-shadow: 0 0 15px rgba(26, 122, 74, 0.1);
    }
</style>

<div style="max-width: 450px; margin: 60px auto; text-align: center;">
    
    <div style="display: flex; justify-content: center; gap: 12px; margin-bottom: 40px;">
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 24px; height: 12px; border-radius: 10px; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
    </div>

    <h2 style="font-weight: 800; margin-bottom: 8px;">Account Verification</h2>
    <p style="color: #888; font-size: 14px; margin-bottom: 32px; line-height: 1.6;">
        Masukan Kode 5 digit yang telah<br>dikirim ke nomor HP anda.
    </p>

    
    <div class="otp-container">
        <input type="text" maxlength="1" class="otp-input" oninput="moveToNext(this, 'otp2')">
        <input type="text" maxlength="1" id="otp2" class="otp-input" oninput="moveToNext(this, 'otp3')">
        <input type="text" maxlength="1" id="otp3" class="otp-input" oninput="moveToNext(this, 'otp4')">
        <input type="text" maxlength="1" id="otp4" class="otp-input" oninput="moveToNext(this, 'otp5')">
        <input type="text" maxlength="1" id="otp5" class="otp-input">
    </div>

    <button onclick="window.location.href='<?php echo e(route('toko.step3')); ?>'" class="btn-swap-main">
        Verifikasi
    </button>

    <p style="font-size: 13px; color: #888; margin-top: 24px;">
        Tidak terima kode? <a href="#" style="color: #1a7a4a; font-weight: 700; text-decoration: none;">Kirim Ulang</a>
    </p>
</div>

<script>
    // UX Magic: Auto-focus next input box
    function moveToNext(current, nextFieldID) {
        if (current.value.length >= 1) {
            document.getElementById(nextFieldID).focus();
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/potato/Documents/SEMESTER 6 /trade-in/resources/views/toko/create/step2.blade.php ENDPATH**/ ?>