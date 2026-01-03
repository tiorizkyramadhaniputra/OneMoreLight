<?php $__env->startSection('title', 'Kelola Produk'); ?>

<?php $__env->startSection('page-title', 'Products'); ?>
<?php $__env->startSection('page-subtitle', 'Kelola produk yang ditampilkan di halaman utama'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item active" aria-current="page">Products</li>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('mazer/assets/vendors/simple-datatables/style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Daftar Produk</h4>
            <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> Tambah Produk
            </a>
        </div>
        <div class="card-body">
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th width="60">No</th>
                        <th width="100">Gambar</th>
                        <th>Judul</th>
                        <th>Subtitle</th>
                        <th>Tags</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td>
                            <img src="<?php echo e(asset($product['image'])); ?>" alt="<?php echo e($product['title']); ?>" 
                                 class="rounded" style="width: 80px; height: 60px; object-fit: cover;">
                        </td>
                        <td class="fw-bold"><?php echo e($product['title']); ?></td>
                        <td><?php echo e($product['subtitle']); ?></td>
                        <td>
                            <?php $__currentLoopData = $product['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="badge bg-light-primary"><?php echo e($tag); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('admin.products.edit', $product['id'])); ?>" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="<?php echo e(route('admin.products.destroy', $product['id'])); ?>" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/macbookair/PrjctCharoen/Charoen/resources/views/admin/pages/products/index.blade.php ENDPATH**/ ?>