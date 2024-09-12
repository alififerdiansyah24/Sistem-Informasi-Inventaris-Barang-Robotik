<?php $__env->startSection('title', 'Transaksi'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('library/datatables/media/css/jquery.dataTables.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/izitoast/dist/css/iziToast.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?><div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Transaksi</h1>
            </div>
            <div class="section-body">
                <div class="row ">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <h4>Tabel List Persetujuan Transaksi</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-striped table" id="table-2">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Tanggal</th>
                                                <th>Jenis</th>
                                                <th>Penerima</th>
                                                <th>Tujuan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <?php echo e($loop->index + 1); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($k->tanggal_transaksi); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($k->jenisTransaksi->jenis); ?>

                                                    </td>
                                                    <td>
                                                        <?php if($k->penerima == null): ?>
                                                            -
                                                        <?php else: ?>
                                                            <?php echo e($k->penerima); ?>

                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($k->tujuan == null): ?>
                                                            -
                                                        <?php else: ?>
                                                            <?php echo e($k->tujuan); ?>

                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($k->status == 'diterima'): ?>
                                                            <div class="badge badge-success"><?php echo e(ucfirst($k->status)); ?>

                                                            </div>
                                                        <?php elseif($k->status == 'ditolak'): ?>
                                                            <div class="badge badge-danger"><?php echo e(ucfirst($k->status)); ?></div>
                                                        <?php elseif($k->status == 'direview'): ?>
                                                            <div class="badge badge-warning"><?php echo e(ucfirst($k->status)); ?>

                                                            </div>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <form action="<?php echo e(route('transaksi.tolakTransaksi', $k->id)); ?>"
                                                            method="POST" id="tolakTransaksi-<?php echo e($k->id); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <a href="<?php echo e(route('transaksi.edit', $k->id)); ?>"
                                                                class="btn btn-icon btn-success"><i
                                                                    class="fa-solid fa-check"></i></a>
                                                            <button type="button" class="btn btn-icon btn-danger"
                                                                id="swal-6"
                                                                onclick="tolakTransaksi('<?php echo e($k->id); ?>')"><i
                                                                    class="fa-solid fa-xmark"></i></button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AB\Inventaris-Pro-main\Inventaris-Pro-main\resources\views/pages/transaksi/persetujuan.blade.php ENDPATH**/ ?>