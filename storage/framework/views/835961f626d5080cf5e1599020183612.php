<?php $__env->startSection('title', 'Meja'); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="container-fluid">
            <h1 class="mb-4">Semua Meja</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table mb-0 text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nomor Meja</th>
                                    <th>Status Meja</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $__empty_1 = true; $__currentLoopData = $meja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($row->nomor_meja); ?></td>
                                            <?php if($row->status == 1): ?>
                                                <td>Kosong</td>
                                            <?php else: ?>
                                                <td>Terisi</td>
                                            <?php endif; ?>
                                            <td><a href="<?php echo e(route('editmeja', $row->id)); ?>" class="btn btn-primary">Edit</a></td>
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
<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Downloads\UKK_KasirApp-master\resources\views/page/transaksi/meja.blade.php ENDPATH**/ ?>