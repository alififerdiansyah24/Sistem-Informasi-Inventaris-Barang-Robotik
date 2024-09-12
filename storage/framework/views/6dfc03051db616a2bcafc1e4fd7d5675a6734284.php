<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('library/jqvmap/dist/jqvmap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/summernote/dist/summernote-bs4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/flag-icon-css/css/flag-icon.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <?php if(Auth::user()->role == 'admin'): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>User</h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($countUsers); ?>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4 class="p-0 w-100">Penanggung Jawab</h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($countPenanggungJawabs); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Barang</h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($countBarangs); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Transaksi</h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($countTransaksis); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif(Auth::user()->role == 'manajemen'): ?>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Barang</h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($countBarangs); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Transaksi</h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($countTransaksis); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Kategori Barang</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart2" height="180"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Jenis Transaksi</h4>
                        </div>
                        <?php
                            $persen_pemasukan = (count($pemasukan) / $countTransaksis) * 100;
                            $persen_pengeluaran = (count($pengeluaran) / $countTransaksis) * 100;
                            $persen_peminjaman = (count($peminjaman) / $countTransaksis) * 100;
                            $persen_pengembalian = (count($pengembalian) / $countTransaksis) * 100;
                        ?>
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="text-small font-weight-bold text-muted float-right">
                                    <?php echo e(count($pemasukan)); ?>

                                </div>
                                <div class="font-weight-bold mb-1">Pemasukan</div>
                                <div class="progress" data-height="3">

                                    <div class="progress-bar" role="progressbar" data-width="<?php echo e($persen_pemasukan . '%'); ?>"
                                        aria-valuenow="<?php echo e($persen_pemasukan); ?>" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="text-small font-weight-bold text-muted float-right"> <?php echo e(count($pengeluaran)); ?>

                                </div>
                                <div class="font-weight-bold mb-1">Pengeluaran</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar"
                                        data-width="<?php echo e($persen_pengeluaran . '%'); ?>"
                                        aria-valuenow="<?php echo e($persen_pengeluaran); ?>" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="text-small font-weight-bold text-muted float-right"> <?php echo e(count($peminjaman)); ?>

                                </div>
                                <div class="font-weight-bold mb-1">Peminjaman</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar"
                                        data-width="<?php echo e($persen_peminjaman . '%'); ?>"
                                        aria-valuenow="<?php echo e($persen_peminjaman); ?>" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="text-small font-weight-bold text-muted float-right">
                                    <?php echo e(count($pengembalian)); ?>

                                </div>
                                <div class="font-weight-bold mb-1">Pengembalian</div>
                                <div class="progress" data-height="3">
                                    <div class="progress-bar" role="progressbar"
                                        data-width="<?php echo e($persen_pengembalian . '%'); ?>"
                                        aria-valuenow="<?php echo e($persen_pengembalian); ?>" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart3" height="180"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- JS Libraies -->
    <script src="<?php echo e(asset('library/simpleweather/jquery.simpleWeather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/chart.js/dist/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/jqvmap/dist/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
    <script src="<?php echo e(asset('library/summernote/dist/summernote-bs4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/chocolat/dist/js/jquery.chocolat.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/jquery-sparkline/jquery.sparkline.min.js')); ?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo e(asset('js/page/index-0.js')); ?>"></script>
    
    <script>
        <?php
            $countKategori = [];
            $backgroundColor = [];
            foreach ($kategori as $d) {
                $countKategori[] = count($barang->where('id_kategori', $d->id));
                $backgroundColor[] = 'rgba(' . rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255) . ',.8)';
            }
        ?>
        var ctx = document.getElementById("myChart2").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: [
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        "<?php echo e($d->nama); ?>",
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                datasets: [{
                        label: "Statistics",

                        data: [
                            <?php $__currentLoopData = $countKategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                "<?php echo e($c); ?>",
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ],
                        borderWidth: 2,
                        backgroundColor: [
                            <?php $__currentLoopData = $backgroundColor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                "<?php echo e($b); ?>",
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ],
                        borderColor: "transparent",
                        borderWidth: 0,
                        pointBackgroundColor: "#999",
                        pointRadius: 4,
                    },

                ],
            },
            options: {
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: "#f2f2f2",
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            display: false,
                        },
                    }, ],
                },
            },
        });
        <?php
            $status = ['diterima', 'ditolak', 'direview'];
            $countStatus = [];
            foreach ($status as $s) {
                $countStatus[] = count($transaksi->where('status', $s));
            }
        ?>
        var ctx = document.getElementById("myChart3").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: [
                    <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        "<?php echo e(ucfirst($s)); ?>",
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ],
                datasets: [{
                        label: "Statistics",
                        data: [
                            <?php $__currentLoopData = $countStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                "<?php echo e($c); ?>",
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ],
                        borderWidth: 2,
                        backgroundColor: [
                            'rgb(71,195,99)',
                            'rgb(252,84,75)',
                            'rgb(255,193,7)'
                        ],
                        hoverOffset: 4,
                    },

                ],
            },

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\AB\Inventaris-Pro-main\Inventaris-Pro-main\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>