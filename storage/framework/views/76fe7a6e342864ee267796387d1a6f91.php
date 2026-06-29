<?php $__env->startSection('content'); ?>
<div style="max-width: 450px; margin: 60px auto; text-align: center;">
    
    <div style="display: flex; justify-content: center; gap: 12px; margin-bottom: 40px;">
        <div style="width: 24px; height: 12px; border-radius: 10px; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ddd;"></div>
    </div>

    <h2 style="font-weight: 800; margin-bottom: 32px;">Persiapan Akun</h2>

    <form action="<?php echo e(route('toko.step1.post')); ?>" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
        <?php echo csrf_field(); ?>
        <input type="email" name="email" placeholder="Email" style="width:100%; padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;" required>
        <input type="text" name="phone" placeholder="Nomor HP" style="width:100%; padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;" required>
        <input type="text" name="shop_name" placeholder="Nama Toko" style="width:100%; padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;" required>
        <input type="text" name="shop_domain" placeholder="Domain Toko" style="width:100%; padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;" required>
        <input type="text" name="address" placeholder="Alamat Toko" style="width:100%; padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;" required> 

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
             <input type="text" placeholder="Kota" style="padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;">
             <input type="text" placeholder="Kode Pos" style="padding: 14px; border-radius: 10px; border:none; background: #f3f9fb;">
        </div>

        <button type="submit" class="btn-swap-main" style="margin-top: 32px;">
            Lanjut
        </button>
        <p style="font-size: 11px; color: #888; margin-top: 16px;">Dengan mendaftar, saya menyetujui <br> <a href="#" style="color: #1a7a4a; font-weight: 700;">Syarat & Ketentuan</a> serta <a href="#" style="color: #1a7a4a; font-weight: 700;">Kebijakan Privasi SwapIn</a></p>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/potato/Documents/SEMESTER 6 /trade-in/resources/views/toko/create/step1.blade.php ENDPATH**/ ?>