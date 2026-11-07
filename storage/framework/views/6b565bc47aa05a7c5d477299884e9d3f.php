<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Web Profile'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap-5.3.8-dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.8/css/dataTables.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            position: fixed;
            top: 56px;
            width: 200px;
            min-height: 100vh;
            background-color: #343a40;
        }

        .sidebar a {
            display: block;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-top: 70px;
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            border-radius: 10px;
            border: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top shadow-sm px-3">
        <!-- <div class="container"> -->
        <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>">
            <a class="navbar-brand" href="<?php echo e(route('admin.dashboard')); ?>">
                <img src="<?php echo e(asset('images/Logo.png')); ?>" alt="Logo" style="height: 40px; width: auto;">
            </a>
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li class="dropdown-item-text text-muted">
                            <email><?php echo e(Auth::user()->email); ?></email>
                        </li>
                        <li>
                            <form method="POST" action="<?php echo e(route('admin.logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- </div> -->
    </nav>
    <div class="sidebar shadow-sm">
        <h5 class="text-center text-white py-3">Admin Menu</h5>
        <a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
        <a href="<?php echo e(route('projects.index')); ?>">Data project</a>
    </div>

    <div class="content p-3 d-flex flex-column">
        <div class="flex-grow">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <footer class="bg-white text-dark text-center py-3 mt-5 border-top">
        <!-- <div class="container"> -->
        <p class="mb-0">&copy; <?php echo e(date('Y')); ?> Abi Mufti Narvani Iztihadi - 251011701092.</p>
        <!-- </div> -->
    </footer>
    <script src="<?php echo e(asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.8/js/dataTables.min.js"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH C:\laragon\www\rekayasa-web\resources\views/admin/template.blade.php ENDPATH**/ ?>