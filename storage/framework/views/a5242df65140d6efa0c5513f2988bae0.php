<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Dashboard'); ?> - PT Charoen Pokphand</title>

    <link rel="shortcut icon" href="<?php echo e(asset('mazer/assets/images/favicon.svg')); ?>" type="image/x-icon">
    
    <link rel="stylesheet" crossorigin href="<?php echo e(asset('mazer/assets/compiled/css/app.css')); ?>">
    <link rel="stylesheet" crossorigin href="<?php echo e(asset('mazer/assets/compiled/css/app-dark.css')); ?>">
    <link rel="stylesheet" crossorigin href="<?php echo e(asset('mazer/assets/compiled/css/iconly.css')); ?>">
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <script src="<?php echo e(asset('mazer/assets/static/js/initTheme.js')); ?>"></script>
    <div id="app">
        <?php echo $__env->make('admin.partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <div id="main">
            <?php echo $__env->make('admin.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('admin.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
    
    <script src="<?php echo e(asset('mazer/assets/static/js/components/dark.js')); ?>"></script>
    <script src="<?php echo e(asset('mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('mazer/assets/compiled/js/app.js')); ?>"></script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\OneMoreLightLP\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>