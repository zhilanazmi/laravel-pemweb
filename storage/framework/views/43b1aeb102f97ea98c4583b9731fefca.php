<?php $__env->startSection('title', 'Transaksi'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container-fluid">
        <h1 class="mb-4">Semua Transaksi</h1>
        <div class="row">
            <div class="col-md-6 ms-2 mb-3">
            </div>
            <div class="col-md-6">
                <form class="" action="/see-all-transaction" method="GET">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="text" name="nama_karyawan" class="form-control" placeholder="Cari nama kasir, pelanggan atau nomor pemesanan ..." aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 mb-4">
                <form class="" action="/see-all-transaction" method="GET">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="date" name="tanggal" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table mb-0 text-center">
                        <thead class="thead-light">
                            <tr>
                                <th>Tanggal Transaksi</th>
                                <th>Nomor Meja</th>
                                <th>Nama Kasir</th>
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
                                        <td><?php echo e($row->user->name); ?></td>
                                        <td><?php echo e($row->nama_pelanggan); ?></td>
                                        <td><?php echo e($row->status); ?></td>
                                        <td><?php echo e($row->nomor_pemesanan); ?></td>
                                        <td>Rp<?php echo e(number_format($row->total_harga)); ?></td>
                                        <td><a href="<?php echo e(route('detail-transaksi', $row->id)); ?>" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="6">Belum Ada Data!</td>
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
<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Downloads\UKK_KasirApp-master\resources\views/page/transaksi/transaksisemua.blade.php ENDPATH**/ ?>