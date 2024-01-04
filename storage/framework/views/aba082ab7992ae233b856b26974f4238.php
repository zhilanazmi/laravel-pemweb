<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Pemesanan Berhasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(url('assets/images/favicon.ico')); ?>">

    <!-- App css -->
    <?php echo $__env->make('page.includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-login rounded-left">
                                    <img class="mt-5" style="" src="<?php echo e(url('assets/images/transaction-history.png')); ?>" height="500" width="450">
                                </div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center mb-5">
                                            <a class="text-dark font-size-22 font-family-secondary">
                                                <i class="fab fa-cc-discover"></i> <b>RizkiGroups Cafe</b>
                                            </a>
                                        </div>
                                        
                                        <div class="text-center">
                                            <img src="<?php echo e(url('assets/images/transactional-data.png')); ?>" height="180">
                                            <h1 class="h4 mb-3 mt-4">Pemesanan Atas Nama <?php echo e($transaksi->nama_pelanggan); ?> Berhasil </h1>
                                            <p class="text-muted mb-4 w-75 m-auto">Rincian : </p>
                                            <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <h3 class="d-block mb-4 mt-4"><?php echo e($row->quantity); ?> <?php echo e($row->menu->pluck('nama_menu')[0]); ?></h3>
                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <h3 class="d-block mb-4 mt-4">Nomor Meja : <?php echo e($meja->nomor_meja); ?></h3>
                                            <h3 class="d-block mb-4 mt-4">Tagihan : Rp<?php echo e(number_format($transaksi->total_harga)); ?></h3>
                                            <p class="text-muted mb-4 w-75 m-auto">Terima kasih telah memesan produk toko kami</p>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 text-center">
                                                <a href="<?php echo e(route('transaksipribadi')); ?>" class="btn btn-success"><i class="mdi mdi-keyboard-backspace mr-2"></i>Kembali</a>
                                                <?php if($transaksi->status === 'lunas'): ?>
                                                <a href="<?php echo e(route('cetak-nota', $transaksi->id)); ?>" class="btn btn-success"><i class="mdi mdi-email mr-2"></i>Cetak Nota</a>
                                                <?php endif; ?>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <?php echo $__env->make('page.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH C:\Users\Lenovo\Downloads\UKK_KasirApp-master\resources\views/page/transaksi/pemesanansukses.blade.php ENDPATH**/ ?>