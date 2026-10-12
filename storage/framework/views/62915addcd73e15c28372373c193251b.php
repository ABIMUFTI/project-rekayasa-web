

<?php $__env->startSection('title', 'Project Detail'); ?>

<?php $__env->startSection('content'); ?>
<div class="container flex-grow-1">
    <div class="mb-4">
        <a href="<?php echo e(route('project.index')); ?>" class="btn btn-danger">Kembali</a>
    </div>
    <div class="row g-4">
        <div class="col-md-7">
            <img src="<?php echo e(asset('images/'. $project->image)); ?>" alt="" class="img-fluid h-100 w-100"
                style="min-height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-5">
            <div class="card-body ">
                <h5 class="card-title mb-4"><?php echo e($project->title); ?></h5>
                <div class="mb-2">
                    <small>Tech : <?php echo e($project->teknologi); ?></small>
                </div>
                <span class="badge bg-success"><?php echo e($project->status); ?></span>
                <p class="card-text"><?php echo e($project->description); ?></p>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
                <div class="mb-2">
                    <small>Dibuat : <?php echo e($project->created_at->format('d M Y')); ?></small>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekayasa-web\resources\views/page/project-detail.blade.php ENDPATH**/ ?>