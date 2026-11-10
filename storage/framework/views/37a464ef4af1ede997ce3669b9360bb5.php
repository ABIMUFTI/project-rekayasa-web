<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Projects</title>
</head>
<body>
    <h1>Data Projects</h1>
    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Title</th>
                <th>Technology</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td>
                    <?php if($project->image): ?>
                    <img src="<?php echo e(public_path('images/'.$project->image)); ?>" alt="<?php echo e($project->title); ?>"
                        style="max-width: 100px;">
                    <?php else: ?>
                    <span class="text-muted">No Image</span>
                    <?php endif; ?>
                </td>
                <td><?php echo e($project->title); ?></td>
                <td><?php echo e($project->teknologi); ?></td>
                <td><?php echo e(Str::limit($project->description, 50)); ?></td>
                <td><?php echo e($project->status); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\laragon\www\rekayasa-web\resources\views/admin/projects/pdf.blade.php ENDPATH**/ ?>