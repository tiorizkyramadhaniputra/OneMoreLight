

<?php $__env->startSection('title', 'Kelola Management'); ?>

<?php $__env->startSection('page-title', 'Management - ' . $categoryLabel); ?>
<?php $__env->startSection('page-subtitle', 'Kelola data personil perusahaan'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item active" aria-current="page">Management</li>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('mazer/assets/vendors/simple-datatables/style.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <h4 class="card-title mb-0"><?php echo e($categoryLabel); ?></h4>
                <div class="d-flex gap-2 flex-wrap">
                    <div class="mb-3">
                        <a href="<?php echo e(route('admin.management.create', ['category' => $category])); ?>" class="btn btn-primary">
                            <i class="bi bi-plus-lg"></i> Tambah Anggota
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body mt-0 mb-0.5">
             <!-- Category Tabs -->
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('admin.management.index', ['category' => $cat])); ?>" 
                           class="btn btn-sm <?php echo e($category === $cat ? 'btn-primary' : 'btn-outline-primary'); ?>">
                            <?php echo e($management[$cat]['label']); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="card-body">
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th width="80">Foto</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Bio</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td>
                                <img src="<?php echo e(asset($member['image'])); ?>" alt="<?php echo e($member['name']); ?>" 
                                     class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                            </td>
                            <td class="fw-bold"><?php echo e($member['name']); ?></td>
                            <td><span class="badge bg-light-primary"><?php echo e($member['role']); ?></span></td>
                            <td><?php echo e(Str::limit($member['bio'], 50)); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.management.edit', ['management' => $member['id'], 'category' => $category])); ?>" 
                                   class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="<?php echo e(route('admin.management.destroy', ['management' => $member['id'], 'category' => $category])); ?>" 
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus anggota ini?')">
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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\OneMoreLightLP\resources\views/admin/pages/management/index.blade.php ENDPATH**/ ?>