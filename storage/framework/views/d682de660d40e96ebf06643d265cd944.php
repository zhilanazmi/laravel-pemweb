<?php $__env->startSection('title', 'Create Meja'); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="container-fluid">
            <h1 class="mb-4">Create Meja</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo e(route('meja.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Meja</label>
                            <input type="text" name="nomor_meja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor meja">
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Downloads\UKK_KasirApp-master\resources\views/page/meja/create.blade.php ENDPATH**/ ?>