<?php $__env->startSection('title', $slide ? 'Edit Slide' : 'Tambah Slide'); ?>

<?php $__env->startSection('page-title', $slide ? 'Edit Slide' : 'Tambah Slide'); ?>
<?php $__env->startSection('page-subtitle', 'Form untuk ' . ($slide ? 'mengubah' : 'menambah') . ' slide carousel'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('admin.slides.index')); ?>">Slides</a></li>
<li class="breadcrumb-item active" aria-current="page"><?php echo e($slide ? 'Edit' : 'Tambah'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><?php echo e($slide ? 'Edit Slide' : 'Tambah Slide Baru'); ?></h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e($slide ? route('admin.slides.update', $slide['id']) : route('admin.slides.store')); ?>" 
                  method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if($slide): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Judul <span class="text-danger">*</span></label>
                            <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="title" name="title" value="<?php echo e(old('title', $slide['title'] ?? '')); ?>" required>
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                            <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                      id="description" name="description" rows="4" required><?php echo e(old('description', $slide['description'] ?? '')); ?></textarea>
                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Gambar Background</label>
                            <?php if($slide && isset($slide['image'])): ?>
                                <div class="mb-2">
                                    <img src="<?php echo e(asset($slide['image'])); ?>" alt="Current image" 
                                         class="img-thumbnail" style="max-height: 150px;">
                                </div>
                            <?php endif; ?>
                            <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="image" name="image" accept="image/*">
                            <small class="text-muted">Format: JPG, PNG, GIF. Max 2MB</small>
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> <?php echo e($slide ? 'Simpan Perubahan' : 'Simpan'); ?>

                    </button>
                    <a href="<?php echo e(route('admin.slides.index')); ?>" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/macbookair/PrjctCharoen/Charoen/resources/views/admin/pages/slides/form.blade.php ENDPATH**/ ?>