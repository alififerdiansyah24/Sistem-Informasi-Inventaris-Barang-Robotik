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
                        <?php if(Auth()->user()->hasRole('admin') ||
                                Auth()->user()->hasRole('manajemen')): ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Laporan Transaksi</h4>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo e(route('transaksi.tampilkan')); ?>" method="GET">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-3">
                                                <!-- Input Tanggal Awal -->
                                                <input type="date"
                                                    class="form-control <?php $__errorArgs = ['tanggal_awal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> <?php if(old('tanggal_awal')): ?> is-valid <?php endif; ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="tanggal_awal" name="tanggal_awal"
                                                    value="<?php echo e(isset($tanggal_awal) ? $tanggal_awal : old('tanggal_awal')); ?>"
                                                    required>
                                                <?php $__errorArgs = ['tanggal_awal'];
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
                                            <span class="mt-2">-</span>
                                            <div class="col-3">
                                                <!-- Input Tanggal Akhir -->
                                                <input type="date"
                                                    class="form-control <?php $__errorArgs = ['tanggal_akhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> <?php if(old('tanggal_akhir')): ?> is-valid <?php endif; ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="tanggal_akhir" name="tanggal_akhir"
                                                    value="<?php echo e(isset($tanggal_akhir) ? $tanggal_akhir : old('tanggal_akhir')); ?>"
                                                    required>
                                                <?php $__errorArgs = ['tanggal_akhir'];
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
                                            <div class="col-md-4 p-0 mt-1">
                                                <button type="submit" class="btn btn-primary mr-2" name="proses"
                                                    value="tampilkan">
                                                    <i class="fas fa-transaksi-plus"></i> Tampilkan
                                                </button>
                                                <button type="submit" class="btn btn-danger mr-2" name="proses"
                                                    value="pdf">
                                                    <i class="fas fa-file-pdf"></i> PDF
                                                </button>
                                                <button type="submit" class="btn btn-success " name="proses"
                                                    value="excel">
                                                    <i class="fas fa-file-excel"></i> Excel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="card">
                            <div class="card-header text-center">
                                <h4>Tabel List Riwayat Transaksi</h4>
                            </div>

                            <div class="card-body">
                                <div class="mb-3">
                                    <!-- Tombol Tambah Transaksi dengan Icon -->
                                    <?php if(Auth::user()->hasRole('admin')): ?>
                                        <a href="<?php echo e(route('transaksi.create')); ?>" class="btn btn-info ">
                                            <i class="fas fa-transaksi-plus"></i> Tambah Transaksi
                                        </a>
                                    <?php endif; ?>
                                </div>
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
                                                        <form action="<?php echo e(route('transaksi.destroy', $k->id)); ?>"
                                                            method="POST" id="deleteForm-<?php echo e($k->id); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <a href="<?php echo e(route('transaksi.show', $k->id)); ?>"
                                                                class="btn btn-icon btn-primary"><i
                                                                    class="far fa-eye"></i></a>
                                                            <?php if(Auth::user()->hasRole('admin')): ?>
                                                                <button type="button" class="btn btn-icon btn-danger"
                                                                    id="swal-6"
                                                                    onclick="confirmDelete('<?php echo e($k->id); ?>')"><i
                                                                        class="far fa-trash-alt"></i></button>
                                                            <?php endif; ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AB\Inventaris-Pro-main\Inventaris-Pro-main\resources\views/pages/transaksi/index.blade.php ENDPATH**/ ?>