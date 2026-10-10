

<?php $__env->startSection('title', 'project'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container flex-grow-1">
    <div class="mb-4 text-center">
        <h2 class="fw-bold">Portofolio Project</h2>
        <p class="text-muted">Daftar Project yang dikerjakan oleh mahasiswa</p>
    </div>
    <div class="row g-4">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="<?php echo e(asset('images/' . $project->image)); ?>" alt="" class="card-img-top"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body ">
                    <h5 class="card-title mb-4"><?php echo e($project->title); ?></h5>
                    <span class="badge bg-success"><?php echo e($project->status); ?></span>
                    <p class="card-text"><?php echo e(Str::limit($project->description, 50)); ?></p>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <div class="mb-2">
                        <small>Tech : <?php echo e($project->teknologi); ?></small>
                    </div>
                    <a href="<?php echo e(route('project.show', $project->id)); ?>" class="btn btn-primary w-100">Detail Project</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekayasa-web\resources\views/page/project.blade.php ENDPATH**/ ?>