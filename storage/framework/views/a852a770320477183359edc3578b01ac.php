

<?php $__env->startSection('title', 'Kelola Slides'); ?>

<?php $__env->startSection('page-title', 'Hero Slides'); ?>
<?php $__env->startSection('page-subtitle', 'Kelola carousel di halaman utama'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item active" aria-current="page">Slides</li>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('mazer/assets/vendors/simple-datatables/style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Daftar Slides</h4>
            <a href="<?php echo e(route('admin.slides.create')); ?>" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> Tambah Slide
            </a>
        </div>
        <div class="card-body">
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(session('error')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th width="60">No</th>
                        <th width="120">Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td>
                            <img src="<?php echo e(asset($slide['image'])); ?>" alt="<?php echo e($slide['title']); ?>" 
                                 class="rounded" style="width: 80px; height: 50px; object-fit: cover;">
                        </td>
                        <td class="fw-bold"><?php echo e($slide['title']); ?></td>
                        <td><?php echo e(Str::limit($slide['description'], 60)); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.slides.edit', $slide['id'])); ?>" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="<?php echo e(route('admin.slides.destroy', $slide['id'])); ?>" method="POST" class="d-inline" 
                                  onsubmit="return confirm('Yakin ingin menghapus slide ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('mazer/assets/vendors/simple-datatables/simple-datatables.js')); ?>"></script>
<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1, {
        perPage: 10,
        searchable: true,
        sortable: true
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\OneMoreLightLP\resources\views/admin/pages/slides/index.blade.php ENDPATH**/ ?>