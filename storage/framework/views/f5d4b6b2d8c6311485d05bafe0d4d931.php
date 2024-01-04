<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <div class="navbar-brand-box">
            <a href="/dashboard" class="logo">
                <i class="mdi mdi-album"></i>
                <span>
                    Kasir App
                </span>
            </a>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('check_most')): ?>
                <li>
                    <a href="/dashboard" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span>Dashboard</span></a>
                </li>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crud_user')): ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-table-merge-cells"></i><span>User</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo e(route('user.index')); ?>">Data Users</a></li>
                            <li><a href="<?php echo e(route('user.create')); ?>">Tambah User</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crud_table')): ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-table-merge-cells"></i><span>Meja</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo e(route('meja.index')); ?>">Semua Tables</a></li>
                            <li><a href="<?php echo e(route('meja.create')); ?>">Buat Table</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crud_menu')): ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-table-merge-cells"></i><span>Menu</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="<?php echo e(route('menu.index')); ?>">Semua Menu</a></li>
                            <li><a href="<?php echo e(route('menu.create')); ?>">Buat Menu</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'kasir|manajer')): ?>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                class="mdi mdi-table-merge-cells"></i><span>Transaksi</span></a>
                        <ul class="sub-menu" aria-expanded="false">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('do_transaction')): ?>
                                <li><a href="<?php echo e(route('transaksiview')); ?>">Tambah Transaksi</a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('see_private_transaction')): ?>
                                <li><a href="<?php echo e(route('transaksipribadi')); ?>">Lihat Transaksi</a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('see_all_transaction')): ?>
                                <li><a href="<?php echo e(route('transaksisemua')); ?>">Lihat Transaksi</a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('check_table_number')): ?>
                                <li><a href="<?php echo e(route('lihatmeja')); ?>">Lihat Status Meja</a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cek_keuangan')): ?>
                                <li><a href="<?php echo e(route('cek_keuangan')); ?>">Lihat Laporan Keuangan</a></li>
                            <?php endif; ?>
                            

                        </ul>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div><?php /**PATH C:\Users\Lenovo\Documents\Tugas Kuliah\PEMWEB\final-project\resources\views/page/includes/sidebar.blade.php ENDPATH**/ ?>