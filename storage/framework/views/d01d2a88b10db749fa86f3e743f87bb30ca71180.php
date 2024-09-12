<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo e(route('home')); ?>">Pro-X</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo e(route('home')); ?>">PX</a>
        </div>

        <ul class="sidebar-menu">
            <?php
                $admin = Auth::user()->hasRole('admin');
                $manajemen = Auth::user()->hasRole('manajemen');
            ?>

            <?php if($admin || $manajemen): ?>
                <?php if($admin): ?>
                    <li class="menu-header">Admin</li>
                    <li class="<?php echo e(Request::is('dashboard/admin') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('/dashboard/admin')); ?>"><i class="fas fa-fire"></i>
                            <span>Dashboard</span></a>
                    </li>
                <?php elseif($manajemen): ?>
                    <li class="menu-header">Manajer</li>
                    <li class="<?php echo e(Request::is('dashboard/manajemen') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('/dashboard/manajemen')); ?>"><i class="fas fa-fire"></i>
                            <span>Dashboard</span></a>
                    </li>
                <?php endif; ?>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i><span>Master
                            Data</span></a>
                    <ul class="dropdown-menu">
                        <?php if($admin): ?>
                            <li class="<?php echo e(Request::is('dashboard/user*') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(url('/dashboard/user')); ?>"><i class="far fa-user"></i>
                                    <span>User</span></a>
                            </li>
                            <li class="<?php echo e(Request::is('dashboard/penanggung-jawab*') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(url('/dashboard/penanggung-jawab')); ?>"><i
                                        class="fas fa-user-tie"></i>
                                    <span>Penanggung Jawab</span></a>
                            </li>
                        <?php endif; ?>

                        <li class="<?php echo e(Request::is('dashboard/kategori*') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('/dashboard/kategori')); ?>"><i class="fas fa-list"></i>
                                <span>Kategori</span></a>
                        </li>
                        <li class="<?php echo e(Request::is('dashboard/barang*') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('/dashboard/barang')); ?>"><i class="fas fa-box"></i>
                                <span>Barang</span></a>
                        </li>
                        <li class="<?php echo e(Request::is('dashboard/jenis-transaksi*') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('/dashboard/jenis-transaksi')); ?>"><i
                                    class="fas fa-money-bill-alt"></i>
                                <span>Jenis Transaksi</span></a>
                        </li>
                    </ul>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-wallet"></i>
                        <span>Transaksi</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo e(Request::is('transaksi') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('/dashboard/transaksi')); ?>"><i class="fas fa-history"></i>
                                <span>Riwayat</span></a>
                        </li>
                        <li class="<?php echo e(Request::is('transaksi.persetujuan') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('/dashboard/transaksi/persetujuan')); ?>"><i
                                    class="fas fa-check-circle"></i> <span>Persetujuan</span> </a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>

            

            <?php if(Auth::user()->hasRole('anggota')): ?>
                <li class="menu-header">Anggota</li>
                <li class="<?php echo e(Request::is('dashboard/anggota') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(url('/dashboard/anggota')); ?>"><i class="fas fa-fire"></i>
                        <span>Dashboard</span></a>
                </li>
                <li class="<?php echo e(Request::is('dashboard/anggota/barang') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(url('/dashboard/anggota/barang')); ?>"><i class="fas fa-box"></i>
                        <span>Barang</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i>
                        <span>Pengajuan</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo e(Request::is('dashboard/anggota/peminjaman*') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('/dashboard/anggota/peminjaman')); ?>">
                                <i class="fas fa-arrow-circle-right"></i>
                                <span>Peminjaman</span>
                            </a>
                        </li>
                        <li class="<?php echo e(Request::is('dashboard/anggota/pengembalian*') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('/dashboard/anggota/pengembalian')); ?>">
                                <i class="fas fa-arrow-circle-left"></i>
                                <span>Pengembalian</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo e(Request::is('dashboard/anggota/riwayat') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(url('/dashboard/anggota/riwayat')); ?>"><i class="fas fa-history"></i>
                        <span>Riwayat</span></a>
                </li>
            <?php endif; ?>

        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="<?php echo e(route('logout')); ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Log Out
            </a>
        </div>
    </aside>
</div>
<?php /**PATH D:\AA\Inventaris-Pro-main\Inventaris-Pro-main\resources\views/components/sidebar.blade.php ENDPATH**/ ?>