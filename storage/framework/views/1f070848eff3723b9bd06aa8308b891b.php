<?php $__env->startSection('title', 'Dashboard Page'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container-fluid">
        <h1>Laporan Keuangan</h1>

        <div class="row">
                <div class="col-md-12 mt-3 mb-4">
                    <form class="" action="/check-keuangan" method="GET">
                        <div class="m-0">
                            <div class="input-group">
                                <div class="col-md-6 form-group">
                                    <label for="">Date From</label>
                                    <input type="date" name="date_from" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </div>
                                <div class="col-md-5 form-group">
                                    <label for="">Date To</label>
                                    <input type="date" name="date_to" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-5">
                            <div class="table-responsive">
                                <table class="table mb-0 text-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Tanggal Transaksi</th>
                                            <th>Status</th>
                                            <th>Total Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $__empty_1 = true; $__currentLoopData = $data['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e($row->tgl_transaksi); ?></td>
                                                    <td><?php echo e($row->status); ?></td>
                                                    <td>
                                                        Rp<?php echo e(number_format($row->total_harga)); ?>

                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="6">Belum Ada Data!</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tr>
                                        <tr>
                                            <th class="thead-light">Total Pemasukan</th>
                                            <td colspan="1">
                                                <td>
                                                    <b>Rp<?php echo e(number_format($data['total'])); ?></b>
                                                </td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div> <!-- container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Downloads\UKK_KasirApp-master\resources\views/page/transaksi/laporan.blade.php ENDPATH**/ ?>