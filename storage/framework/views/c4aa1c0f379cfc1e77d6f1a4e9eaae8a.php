<?php $__env->startSection('content'); ?>
<div style="max-width: 500px; margin: 80px auto; text-align: center; padding: 0 20px;">

    
    <div style="display: flex; justify-content: center; gap: 10px; margin-bottom: 40px;">
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
        <div style="width: 12px; height: 12px; border-radius: 50%; background: #1a7a4a;"></div>
    </div>

    
    <img src="<?php echo e(asset('images/photo.jpg')); ?>" alt="Success Illustration"
         style="width: 100%; max-width: 320px; height: auto; margin-bottom: 40px; display: block; margin-left: auto; margin-right: auto;">

    
    <h1 style="color: #1a7a4a; font-size: 36px; font-weight: 800; margin: 0 0 16px;">
        You're all Set!
    </h1>

    <p style="font-size: 18px; font-weight: 700; color: #1a1a1a; margin: 0 0 8px;">
        Buy for a great price, and sell for others in need
    </p>

    <p style="color: #888; font-size: 15px; margin-bottom: 48px;">
        Become part of SwapIn to find out more!
    </p>

    
    <div style="max-width: 300px; margin: 0 auto;">
        <a href="<?php echo e(route('toko.dashboard')); ?>" class="btn-swap-main">
            Get Started!
        </a>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/potato/Documents/SEMESTER 6 /trade-in/resources/views/toko/create/success.blade.php ENDPATH**/ ?>