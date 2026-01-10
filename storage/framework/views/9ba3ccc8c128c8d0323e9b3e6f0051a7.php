<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?php echo $__env->yieldContent('page-title', 'Dashboard'); ?></h3>
                <p class="text-subtitle text-muted"><?php echo $__env->yieldContent('page-subtitle', ''); ?></p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                        <?php echo $__env->yieldContent('breadcrumb'); ?>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\laragon\www\OneMoreLightLP\resources\views/admin/partials/header.blade.php ENDPATH**/ ?>