

<?php $__env->startSection('title', 'Pengaturan'); ?>

<?php $__env->startSection('page-title', 'Pengaturan Website'); ?>
<?php $__env->startSection('page-subtitle', 'Kelola informasi perusahaan dan visi misi'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item active" aria-current="page">Settings</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <form action="<?php echo e(route('admin.settings.update')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-8">
                <!-- Company Info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi Perusahaan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <label for="company_name" class="form-label">Nama Perusahaan <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" 
                                           value="<?php echo e(old('company_name', $settings['company_name'] ?? '')); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="company_since" class="form-label">Sejak Tahun <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="company_since" name="company_since" 
                                           value="<?php echo e(old('company_since', $settings['company_since'] ?? '')); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="company_tagline" class="form-label">Tagline <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="company_tagline" name="company_tagline" rows="2" required><?php echo e(old('company_tagline', $settings['company_tagline'] ?? '')); ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- Vision Mission -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Visi & Misi</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="vision" class="form-label">Visi <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="vision" name="vision" rows="2" required><?php echo e(old('vision', $settings['vision'] ?? '')); ?></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="mission_intro" class="form-label">Pengantar Misi <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="mission_intro" name="mission_intro" rows="2" required><?php echo e(old('mission_intro', $settings['mission_intro'] ?? '')); ?></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="mission_items" class="form-label">Daftar Misi <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="mission_items" name="mission_items" rows="5" required 
                                      placeholder="Satu item per baris"><?php echo e(old('mission_items', isset($settings['mission_items']) ? implode("\n", $settings['mission_items']) : '')); ?></textarea>
                            <small class="text-muted">Masukkan satu item misi per baris</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Vision Image -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gambar Visi</h4>
                    </div>
                    <div class="card-body">
                        <?php if(isset($settings['vision_image']) && $settings['vision_image']): ?>
                            <div class="mb-3 text-center">
                                <img src="<?php echo e(asset($settings['vision_image'])); ?>" alt="Vision Image" 
                                     class="img-thumbnail" style="max-height: 180px;">
                            </div>
                        <?php endif; ?>
                        <input type="file" class="form-control" id="vision_image" name="vision_image" accept="image/*">
                        <small class="text-muted">Format: JPG, PNG, GIF. Max 2MB</small>
                    </div>
                </div>

                <!-- Company Profile PDF -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Company Profile PDF</h4>
                    </div>
                    <div class="card-body">
                        <?php if(isset($settings['company_profile_pdf']) && $settings['company_profile_pdf']): ?>
                            <div class="mb-3">
                                <a href="<?php echo e(asset($settings['company_profile_pdf'])); ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-file-earmark-pdf"></i> Lihat PDF Saat Ini
                                </a>
                            </div>
                        <?php else: ?>
                            <p class="text-muted mb-3">Belum ada PDF yang diupload</p>
                        <?php endif; ?>
                        <input type="file" class="form-control" id="company_profile_pdf" name="company_profile_pdf" accept=".pdf">
                        <small class="text-muted">Format: PDF. Max 10MB</small>
                    </div>
                </div>

                <!-- Save Button -->
                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="bi bi-save"></i> Simpan Pengaturan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\OneMoreLightLP\resources\views/admin/pages/settings/index.blade.php ENDPATH**/ ?>