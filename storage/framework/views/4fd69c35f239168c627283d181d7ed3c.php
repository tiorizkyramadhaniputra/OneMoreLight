<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin PT Charoen Pokphand</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('mazer/assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('mazer/assets/vendors/bootstrap-icons/bootstrap-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('mazer/assets/css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('mazer/assets/css/pages/auth.css')); ?>">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('mazer/assets/images/logo/logo.png')); ?>" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Masuk ke panel admin dengan akun yang terdaftar.</p>

                    <form action="<?php echo e(route('admin.login.post')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        
                        <?php if(session('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e(session('error')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required>
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <?php $__errorArgs = ['email'];
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
                        
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   name="password" placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <?php $__errorArgs = ['password'];
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
                        
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" name="remember" id="rememberMe">
                            <label class="form-check-label text-gray-600" for="rememberMe">
                                Ingat saya
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    
                    <div class="text-center mt-5 text-lg fs-4">
                        <p><a class="font-bold" href="#">Lupa password?</a></p>
                    </div>
                    
                    <div class="text-center mt-3">
                        <a href="<?php echo e(url('/')); ?>" class="text-muted"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                </div>
            </div>
        </div>
    </div>
    
    <script src="<?php echo e(asset('mazer/assets/js/bootstrap.bundle.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH /Users/macbookair/PrjctCharoen/Charoen/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>