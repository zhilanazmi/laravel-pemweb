<?php $__env->startSection('title', 'Detail Transaksi'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container-fluid">
        <h1 class="mb-4">Detail Transaksi</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table mb-0 text-center">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama Menu</th>
                                <th>Gambar</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row->menu->pluck('nama_menu')[0]); ?></td>
                                    <td><img src="<?php echo e(asset('/storage/' .$row->menu->pluck('gambar')[0])); ?>" height="100" alt="">
                                    <td><?php echo e($row->quantity); ?></td>
                                    <td>Rp<?php echo e(number_format($row->menu->pluck('harga')[0])); ?></td>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <b>Total</b>
                                    </td>
                                    <td colspan="2">
                                        <td>
                                            <b>Rp<?php echo e(number_format($transaksi->total_harga)); ?></b>
                                        </td>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Downloads\UKK_KasirApp-master\resources\views/page/transaksi/detail.blade.php ENDPATH**/ ?>