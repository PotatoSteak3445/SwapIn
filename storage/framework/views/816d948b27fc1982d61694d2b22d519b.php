<?php $__env->startSection('content'); ?>
<style>
    .get-started-container {
        max-width: 600px;
        margin: 120px auto;
        text-align: center;
        padding: 0 20px;
    }

    .gs-title {
        color: #1a7a4a;
        font-size: 36px;
        font-weight: 800;
        margin-bottom: 16px;
        letter-spacing: -0.5px;
    }

    .gs-tagline {
        font-size: 18px;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 8px;
    }

    .gs-sub {
        color: #888;
        font-size: 15px;
        margin-bottom: 48px;
    }

    /* THE BUTTON YOU REQUESTED */
    .btn-swap-get-started {
        background-color: #1a7a4a; /* SwapIn Green */
        color: #ffffff; /* White font */
        padding: 16px 48px;
        font-size: 16px;
        font-weight: 700;
        text-decoration: none;
        display: inline-block;
        border-radius: 16px; /* Exact 16px corner radius */
        transition: all 0.3s ease;
        box-shadow: 0 6px 20px rgba(26, 122, 74, 0.25);
        border: none;
        cursor: pointer;
    }

    .btn-swap-get-started:hover {
        background-color: #155f3a; /* Darker green on hover */
        transform: translateY(-3px); /* Lifts up slightly */
        box-shadow: 0 8px 25px rgba(26, 122, 74, 0.35);
        color: #ffffff;
    }

    .btn-swap-get-started:active {
        transform: translateY(-1px);
    }
</style>

<div class="get-started-container">
    <h1 class="gs-title">Get started on your own shop!</h1>

    <p class="gs-tagline">Buy for a great price, and sell for others in need</p>

    <p class="gs-sub">Become part of SwapIn to find out more!</p>

    <a href="<?php echo e(route('toko.step1')); ?>" class="btn-swap-get-started">
        Get Started!
    </a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/potato/Documents/SEMESTER 6 /trade-in/resources/views/toko/create/start.blade.php ENDPATH**/ ?>