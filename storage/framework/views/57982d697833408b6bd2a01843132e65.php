<div class="header-border"></div>
            <header id="page-topbar">
                <div class="navbar-header">

                    <div class="d-flex align-items-left">
                    </div>

                    <div class="d-flex align-items-center">
                        
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item waves-effect"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo e(url('/storage/' . Auth::user()->gambar)); ?>"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><?php echo e(Auth::user()->name); ?> | <?php echo e(Auth::user()->roles->pluck('name')[0]); ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form class="dropdown-item d-flex align-items-center justify-content-between"
                                    method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button>Log Out</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header><?php /**PATH C:\Users\Lenovo\Downloads\UKK_KasirApp-master\resources\views/page/includes/topbar.blade.php ENDPATH**/ ?>