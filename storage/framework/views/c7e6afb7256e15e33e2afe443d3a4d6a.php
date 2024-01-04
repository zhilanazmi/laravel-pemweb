<?php $__env->startSection('title', 'Transaksi'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container-fluid">
        <h1 class="mb-4">Semua Transaksi</h1>
        <div class="row">
            <div class="col-md-12 ms-2 mb-3">
                <a href="<?php echo e(route('transaksiview')); ?>" class="btn btn-primary">Tambah Data</a>
                <a href="<?php echo e(route('konfirmasibayar')); ?>" class="btn btn-primary d-inline">Konfirmasi Pembayaran</a>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table mb-0 text-center">
                        <thead class="thead-light">
                            <tr>
                                <th>Tanggal Transaksi</th>
                                <th>Nomor Meja</th>
                                <th>Nama Pelanggan</th>
                                <th>Status</th>
                                <th>Nomor Pemesanan</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $__empty_1 = true; $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($row->tgl_transaksi); ?></td>
                                        <td><?php echo e($row->meja->nomor_meja); ?></td>
                                        <td><?php echo e($row->nama_pelanggan); ?></td>
                                        <td><?php echo e($row->status); ?></td>
                                        <td><?php echo e($row->nomor_pemesanan); ?></td>
                                        <td>Rp<?php echo e(number_format($row->total_harga)); ?></td>
                                        <td><a href="<?php echo e(route('detail-transaksi', $row->id)); ?>" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5">Belum Ada Data!</td>
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
<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\Tugas Kuliah\PEMWEB\TUGASBESAR\final-project\resources\views/page/transaksi/transaksipribadi.blade.php ENDPATH**/ ?>