<?php $__env->startSection('title', 'Tambah Transaksi'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('library/select2/dist/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/izitoast/dist/css/iziToast.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Transaksi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"> <a href="<?php echo e(route('transaksi.index')); ?>"> Transaksi</a></div>
                    <div class="breadcrumb-item">Tambah Transaksi</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="<?php echo e(route('transaksi.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="card-header">
                                    <h4>Form Tambah Transaksi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tanggal_transaksi">Tanggal</label>
                                                <input type="date"
                                                    class="form-control <?php $__errorArgs = ['tanggal_transaksi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?> <?php if(old('tanggal_transaksi')): ?> is-valid <?php endif; ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="tanggal_transaksi" name="tanggal_transaksi"
                                                    value="<?php echo e(old('tanggal_transaksi')); ?>" required>
                                                <?php $__errorArgs = ['tanggal_transaksi'];
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Transaksi</label>
                                                <div>
                                                    <div class="selectgroup w-100">
                                                        <?php $__currentLoopData = $jenis_transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="jenis_transaksi"
                                                                    id="jenis_transaksi" value="<?php echo e($jenis_transaksi->id); ?>"
                                                                    class="selectgroup-input <?php $__errorArgs = ['jenis_transaksi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?>  <?php if(old('jenis_transaksi')): ?> is-valid <?php endif; ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                    <?php echo e(old('jenis_transaksi') == $jenis_transaksi->jenis ? 'checked' : ''); ?>>
                                                                <span class="selectgroup-button">
                                                                    <?php echo e(ucfirst($jenis_transaksi->jenis)); ?></span>
                                                                <?php $__errorArgs = ['jenis_transaksi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <?php if($loop->first): ?>
                                                                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                                    <?php endif; ?>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </label>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="penerima">Penerima</label>
                                                <input type="text"
                                                    class="form-control <?php $__errorArgs = ['penerima'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?>  <?php if(old('penerima')): ?> is-valid <?php endif; ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="penerima" name="penerima" value="<?php echo e(old('penerima')); ?>" required>
                                                <?php $__errorArgs = ['penerima'];
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tujuan">Tujuan</label>
                                                <input type="text"
                                                    class="form-control <?php $__errorArgs = ['tujuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php else: ?>  <?php if(old('tujuan')): ?> is-valid <?php endif; ?>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    id="tujuan" name="tujuan" value="<?php echo e(old('tujuan')); ?>" required>
                                                <?php $__errorArgs = ['tujuan'];
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <select class="form-control select2" id="nama_barang" name="nama_barang">
                                                    <option value="" selected disabled>
                                                    </option>
                                                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($b->id); ?>"
                                                            data-nama="<?php echo e($b->nama_barang); ?>"
                                                            data-kategori="<?php echo e($b->kategori->nama); ?>"
                                                            data-kode="<?php echo e($b->kode_barang); ?>"
                                                            data-kondisi="<?php echo e($b->kondisi); ?>"
                                                            data-stok="<?php echo e($b->stok); ?>">
                                                            <?php echo e($b->nama_barang); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group">
                                                <label for="lampiran">Lampiran</label>
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="lampiran">Choose File</label>
                                                    <input type="file"
                                                        class="form-control <?php $__errorArgs = ['lampiran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php elseif(request()->has('lampiran')): ?> is-valid 
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        id="lampiran" name="lampiran" accept=".doc, .docx, .pdf"
                                                        onchange="previewImage()">
                                                    <?php $__errorArgs = ['lampiran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback"><?php echo e($message); ?>

                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" id="id_user" name="id_user"
                                            value="<?php echo e(Auth()->user()->id); ?>">
                                    </div>
                                    <button type="button" class="btn btn-success rounded-pill mb-3"
                                        onclick="tambahItem()">Tambah Barang</button>

                                    <div class="table-responsive">
                                        <table class="table-bordered table-md table" id="tabel_barang">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Kategori</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kondisi</th>
                                                    <th>Stok</th>
                                                    <th>Jumlah Transaksi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="cartData">

                                            </tbody>

                                        </table>
                                        <?php $__errorArgs = ['id_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-center text-danger"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset" id="reset-button">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('library/select2/dist/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/izitoast/dist/js/iziToast.min.js')); ?>"></script>

    <script>
        var nomorUrut = 1;
        var barangSudahAda = [];

        function tambahItem() {
            // Mendapatkan nilai dari select box
            var selectedOption = $('#nama_barang option:selected');

            // Mendapatkan nilai dari data atribut
            var namaBarang = selectedOption.data('nama');
            var kategori = selectedOption.data('kategori');
            var kodeBarang = selectedOption.data('kode');
            var kondisi = selectedOption.data('kondisi');
            var stok = selectedOption.data('stok');

            // Validasi apakah barang sudah dipilih
            if (!selectedOption.val()) {
                alert('Pilih barang terlebih dahulu.');
                return;
            }

            if (barangSudahAda.includes(selectedOption.val())) {
                alert('Barang ini sudah ada di dalam daftar, silahkan pilih barang yang lain!');
                return;
            }

            // Implementasikan penambahan data ke dalam tabel
            var newRow = '<tr>' +
                '<td>' + nomorUrut + '</td>' +
                '<td>' + kategori + '</td>' +
                '<td>' + kodeBarang + '</td>' +
                '<td>' + namaBarang + '</td>' +
                '<td>' + kondisi + '</td>' +
                '<td>' + stok + '</td>' +
                '<td><input type="number" class="form-control" name="jumlah_transaksi[]" value="0" min="1" max="100"></td>' +
                '<td><button type="button" class="btn btn-icon btn-danger" onclick="removeRow(this)"><i class="far fa-trash-alt"></i></button></td>' +
                '<td><input type="hidden" name="id_barang[]" value="' + selectedOption.val() + '"></td>' +
                '</tr>';

            // Tambahkan baris baru ke dalam tabel
            $('#tabel_barang tbody').append(newRow);
            barangSudahAda.push(selectedOption.val());

            nomorUrut++;
        }

        // Menambahkan barang yang sudah ada ke dalam array
        function tambahBarangSudahAda(idBarang) {
            barangSudahAda.push(idBarang);
        }

        // Fungsi untuk menghapus baris tabel
        function removeRow(button) {
            // Menghapus baris saat tombol hapus diklik
            var tr = $(button).closest('tr');
            var idBarang = tr.find('input[name="id_barang[]"]').val();

            // Hapus barang dari array barangSudahAda
            barangSudahAda.splice(barangSudahAda.indexOf(idBarang), 1);

            tr.remove();
        }
    </script>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AB\Inventaris-Pro-main\Inventaris-Pro-main\resources\views/pages/transaksi/create.blade.php ENDPATH**/ ?>