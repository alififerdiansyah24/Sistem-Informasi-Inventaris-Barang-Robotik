<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>

    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image"
                    src="
                    <?php if(Auth()->user()->foto): ?> <?php echo e(asset('img/user/' . Auth()->user()->foto)); ?>

                <?php else: ?>
               <?php echo e(asset('img/avatar/avatar-1.png')); ?> <?php endif; ?>"
                    class="rounded-circle mr-1 w-0" height="30" width="30">
                <div class="d-sm-none d-lg-inline-block"> Hai, <?php echo e(Auth()->user()->nama_lengkap); ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title"><?php echo e(Auth()->user()->role); ?></div>
                <div class="dropdown-divider"></div>
                <a href="<?php echo e(route('logout')); ?>" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH D:\AB\Inventaris-Pro-main\Inventaris-Pro-main\resources\views/components/header.blade.php ENDPATH**/ ?>