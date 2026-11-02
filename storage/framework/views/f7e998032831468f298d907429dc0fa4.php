
<?php $__env->startSection('content'); ?>
<div class="main-content">
    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-3 py-3">
            <h3>Data Projects</h3>
            <a href="<?php echo e(route('projects.create')); ?>" class="btn btn-primary">Tambah Project</a>
        </div>
    </div>
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered" id="table_project">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Technology</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td>
                            <?php if($project->image): ?>
                            <img src="<?php echo e(asset('images/'.$project->image)); ?>" alt="<?php echo e($project->title); ?>"
                                style="max-width: 100px;" class="img-thumbnail">
                            <?php else: ?>
                            <span class="text-muted">No Image</span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($project->title); ?></td>
                        <td><?php echo e($project->teknologi); ?></td>
                        <td><?php echo e(Str::limit($project->description, 50)); ?></td>
                        <td><?php echo e($project->status); ?></td>
                        <td>
                            <a href="<?php echo e(route('projects.edit', $project->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="<?php echo e(route('projects.destroy', $project->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus project ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.8/js/dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table_project').DataTable();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\rekayasa-web\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>