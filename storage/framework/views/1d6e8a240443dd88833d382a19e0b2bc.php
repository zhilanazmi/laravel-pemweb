
<?php $__env->startSection('title', 'Transaksi'); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="container-fluid">
            <h1 class="mb-4">Transaksi</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo e(route('transaksi')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Meja</label>
                            <select name="id_meja" id="" class="form-control">
                                <?php $__currentLoopData = $meja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->id); ?>"><?php echo e($row->nomor_meja); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="belum_bayar">Belum Bayar</option>
                                <option value="lunas">Lunas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="nama_pelanggan">
                        </div>
                        <div class="form-group classAdded mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Menu</label>
                                    <select name="id_menu[]" class="form-control">
                                        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->id); ?>"><?php echo e($row->nama_menu); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="exampleInputEmail1">Jumlah</label>
                                    <input type="number" name="quantity[]" class="form-control">
                                </div>
                                <div class="col-md-1" style="margin-top: 1.8rem">
                                    <a class="btn btn-success addClass" href="javascript:void(0)">+</a>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect subm waves-light">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-add'); ?>
<script>
    $('form').on('click', '.addClass', function () {
        var form = "<div class='form-group classAdded'>"+
                            "<div class='row'>"+
                                "<div class='col-md-6'>"+
                                    "<label for='exampleInputEmail1'>Menu</label>"+
                                    "<select id='selectmenu' name='id_menu[]' class='form-control'>"+
                                        "<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>"+
                                            "<option value='<?php echo e($row->id); ?>'><?php echo e($row->nama_menu); ?></option>"+
                                        "<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>"+
                                    "</select>"+
                                "</div>"+
                                "<div class='col-md-5'>"+
                                    "<label for='exampleInputEmail1'>Jumlah</label>"+
                                    "<input type='number' name='quantity[]' class='form-control'>"+
                                "</div>"+
                                "<div class='col-md-1' style='margin-top: 1.8rem'>"+
                                    "<a class='btn btn-danger removeClass' href='javascript:void(0)'>-</a>"+
                                "</div>"+
                            "</div>"+
                        "</div>"
        $(form).insertBefore('.subm');
    });

    $('form').on('click', '.removeClass', function() {
        $(this).parent().parent().remove();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel-pemweb\resources\views/page/transaksi/create.blade.php ENDPATH**/ ?>