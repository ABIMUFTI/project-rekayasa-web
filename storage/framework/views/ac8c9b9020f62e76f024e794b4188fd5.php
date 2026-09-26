

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <h2> Selamat Datang</h2>
            <p class="text-muted">ini halaman utama web profile mahasiswa prodi SI UNPAM</p>
            <a href="<?php echo e(url('/profile')); ?>" class="btn btn-success">Lihat Profile</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekayasa-web\resources\views/page/home.blade.php ENDPATH**/ ?>