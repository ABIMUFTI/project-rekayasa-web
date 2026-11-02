

<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <h2> Tentang Aplikasi</h2>
            <p class="text-muted">aplikasi ini ada project praktikum rekayasa web prodi SI UNPAM</p>
            <a href="<?php echo e(url('/profile')); ?>" class="btn btn-success">Lihat Profile</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekayasa-web\resources\views/page/about.blade.php ENDPATH**/ ?>