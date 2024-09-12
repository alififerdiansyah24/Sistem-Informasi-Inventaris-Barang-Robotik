    

    <?php $__env->startSection('title', 'Login'); ?>

    <?php $__env->startPush('style'); ?>
        <!-- CSS Libraries -->
        <link rel="stylesheet" href="<?php echo e(asset('library/bootstrap-social/bootstrap-social.css')); ?>">
    <?php $__env->stopPush(); ?>

    <?php $__env->startSection('main'); ?>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Login</h4>
            </div>
            <div class="card-body">
                <?php if(session('error') || $errors->any()): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php if(session('error')): ?>
                <p><?php echo e(session('error')); ?></p>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
            <button type="button" class="close mt-1" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>


                <!-- Pesan kesalahan untuk input kosong -->
                

                <form method="POST" action="<?php echo e(route('postLogin')); ?>" class="needs-validation" novalidate="">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input id="username" type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" autocomplete="off" tabindex="1" autofocus required>
        </div>
        <div class="form-group">
            <div class="d-block">
                <label for="password" class="control-label">Password</label>
            </div>
            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" tabindex="2" required>
        </div>

        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember">
                <label class="custom-control-label" for="remember">Remember Me</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                Login
            </button>
        </div>
    </form>

            
    <div class="form-group">
        <p class="text-center">Belum punya akun? <a href="<?php echo e(route('register')); ?>">Daftar di sini</a></p>
    </div>

        </div>
    </div>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('scripts'); ?>
        <!-- JS Libraies -->
        <!-- Page Specific JS File -->
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AB\Inventaris-Pro-main\Inventaris-Pro-main\resources\views/auth/login.blade.php ENDPATH**/ ?>