<?php $__env->startSection('title', 'List Barang'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('library/datatables/media/css/jquery.dataTables.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/izitoast/dist/css/iziToast.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?><div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>List Barang</h1>
            </div>
            <div class="section-body">
                <div class="row ">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <h4>Tabel List Barang</h4>
                            </div>
                            <div class="card-body">
                                <?php if(Auth()->user()->hasRole('admin') ||
                                        Auth()->user()->hasRole('manajemen')): ?>
                                    <div class="mb-3">
                                        <!-- Tombol Tambah User dengan Icon -->
                                        <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-info ">
                                            <i class="fas fa-plus"></i> Tambah Barang
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="table-responsive">
                                    <table class="table-striped table" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    No
                                                </th>
                                                <th>Nama Barang</th>
                                                <th>Stok</th>
                                                <?php if(Auth()->user()->hasRole('admin') ||
                                                        Auth()->user()->hasRole('manajemen')): ?>
                                                    <th>Kondisi</th>
                                                <?php elseif(Auth()->user()->hasRole('anggota')): ?>
                                                    <th>Kategori</th>
                                                <?php endif; ?>

                                                
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo e($loop->index + 1); ?>

                                                    </td>
                                                    <td><?php echo e($b->nama_barang); ?></td>
                                                    <td><?php echo e($b->stok); ?></td>
                                                    <?php if(Auth()->user()->hasRole('admin') ||
                                                            Auth()->user()->hasRole('manajemen')): ?>
                                                        <td><?php echo e($b->kondisi); ?></td>
                                                    <?php elseif(Auth()->user()->hasRole('anggota')): ?>
                                                        <td><?php echo e($b->kategori->nama); ?></td>
                                                    <?php endif; ?>

                                                    <td>
                                                        <?php if(Auth()->user()->hasRole('admin') ||
                                                                Auth()->user()->hasRole('manajemen')): ?>
                                                            <form action="<?php echo e(route('barang.destroy', $b->id)); ?>"
                                                                method="POST" class="mt-1"
                                                                id="deleteForm-<?php echo e($b->id); ?>">
                                                                <a href="<?php echo e(route('barang.edit', $b->id)); ?>"
                                                                    class="btn btn-icon btn-warning"><i
                                                                        class="far fa-edit"></i></a>
                                                                <a href="<?php echo e(route('barang.show', $b->id)); ?>"
                                                                    class="btn btn-icon btn-primary"><i
                                                                        class="far fa-eye"></i></a>
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <button type="button" class="btn btn-icon btn-danger"
                                                                    id="swal-6"
                                                                    onclick="confirmDelete('<?php echo e($b->id); ?>')"><i
                                                                        class="far fa-trash-alt"></i></button>
                                                            </form>
                                                        <?php elseif(Auth()->user()->hasRole('anggota')): ?>
                                                            <a href="<?php echo e(route('barang.show', $b->id)); ?>"
                                                                class="btn btn-icon btn-primary">Detail</a>
                                                        <?php endif; ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AA\Inventaris-Pro-main\Inventaris-Pro-main\resources\views/pages/barang/index.blade.php ENDPATH**/ ?>