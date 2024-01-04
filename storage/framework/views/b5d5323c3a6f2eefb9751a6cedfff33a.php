<?php $__env->startSection('title', 'Meja'); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="container-fluid">
            <h1 class="mb-4">Semua Meja</h1>
            <div class="row">
                <div class="col-md-12 ms-2 mb-3">
                    <a href="<?php echo e(route('meja.create')); ?>" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table mb-0 text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nomor Meja</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $__empty_1 = true; $__currentLoopData = $meja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($row->nomor_meja); ?></td>
                                            <th class="text-center">
                                                <form action="<?php echo e(route('meja.edit', $row->id)); ?>" class="d-inline">
                                                    <?php echo method_field('PUT'); ?>
                                                    <button class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                </form> |
                                                <form action="<?php echo e(route('meja.destroy', $row->id)); ?>" method="POST" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button class="btn btn-danger">
                                                        Hapus
                                                    </button>
                    
                                                </form>
                                            </th>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="3">Belum Ada Data!</td>
                                        </tr>
                                    <?php endif; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Downloads\UKK_KasirApp-master\resources\views/page/meja/index.blade.php ENDPATH**/ ?>