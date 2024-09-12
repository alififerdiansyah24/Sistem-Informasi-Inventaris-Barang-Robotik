<?php $__env->startSection('title', 'User'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('library/datatables/media/css/jquery.dataTables.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/izitoast/dist/css/iziToast.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?><div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User</h1>
            </div>
            <div class="section-body">
                
                
                <div class="row ">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <h4>Tabel List User</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <!-- Tombol Tambah User dengan Icon -->
                                    <a href="<?php echo e(route('user.create')); ?>" class="btn btn-info ">
                                        <i class="fas fa-user-plus"></i> Tambah User
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table-striped table" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Nama Lengkap</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo e($loop->index + 1); ?>

                                                    </td>
                                                    <td>
                                                        <?php if($user->foto != null): ?>
                                                            <img alt="image" src="<?php echo e(asset('img/user/' . $user->foto)); ?>"
                                                                class="rounded-circle" width="35" height="35"
                                                                data-toggle="tooltip" title="<?php echo e($user->nama_lengkap); ?>">
                                                            <?php echo e($user->nama_lengkap); ?>

                                                        <?php else: ?>
                                                            <img alt="image" src="<?php echo e(asset('img/avatar/avatar-1.png')); ?>"
                                                                class="rounded-circle" width="35" data-toggle="tooltip"
                                                                title="<?php echo e($user->nama_lengkap); ?>">
                                                            <?php echo e($user->nama_lengkap); ?>

                                                        <?php endif; ?>


                                                    </td>
                                                    <td class="align-middle">
                                                        <?php echo e($user->username); ?>

                                                    </td>
                                                    <td>
                                                        <?php if($user->role == 'admin'): ?>
                                                            <div class="badge badge-success">Admin</div>
                                                        <?php elseif($user->role == 'manajemen'): ?>
                                                            <div class="badge badge-info">Manajemen</div>
                                                        <?php elseif($user->role == 'anggota'): ?>
                                                            <div class="badge badge-warning">Anggota</div>
                                                        <?php endif; ?>

                                                    </td>
                                                    </td>
                                                    <td>
                                                        <form action="<?php echo e(route('user.destroy', $user->id)); ?>"
                                                            method="POST" id="deleteForm-<?php echo e($user->id); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <a href="<?php echo e(route('user.edit', $user->id)); ?>"
                                                                class="btn btn-icon btn-primary"><i
                                                                    class="far fa-edit"></i></a>
                                                            <button type="button" class="btn btn-icon btn-danger"
                                                                id="swal-6"
                                                                onclick="confirmDelete('<?php echo e($user->id); ?>')"><i
                                                                    class="far fa-trash-alt"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- JS Libraies -->
    <script src="<?php echo e(asset('library/datatables/media/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/jquery-ui-dist/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/sweetalert/dist/sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/izitoast/dist/js/iziToast.min.js')); ?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo e(asset('js/page/modules-datatables.js')); ?>"></script>
    <script src="<?php echo e(asset('js/page/modules-sweetalert.js')); ?>"></script>
    <script src="<?php echo e(asset('js/page/modules-toastr.js')); ?>"></script>

    <?php if(session('success')): ?>
        <script>
            iziToast.success({
                title: 'Berhasil!',
                message: '<?php echo e(session('success')); ?>',
                position: 'topRight'
            });
        </script>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <script>
            iziToast.error({
                title: 'Gagal!',
                message: '<?php echo e(session('error')); ?>',
                position: 'topRight'
            });
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AA\Inventaris-Pro-main\Inventaris-Pro-main\resources\views/pages/user/index.blade.php ENDPATH**/ ?>