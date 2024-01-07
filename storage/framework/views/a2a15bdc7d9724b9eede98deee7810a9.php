

<?php $__env->startSection('title', 'Dashboard Page'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('check_most')): ?>
            <div class="mt-4 container containera" style="height: 800px; width: 1200px;" id="container"></div>
            <?php endif; ?>
        </div>
        <!-- end page title -->

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
   
            Highcharts.chart('container', {
                title: {
                    text: 'Laporan'
                },
                subtitle: {
                    text: 'Berikut Menu Terlaris'
                },
                xAxis: {
                    categories: [<?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    '<?= $row->nama_menu ?>',
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>],
                },
                yAxis: {
                    title: {
                        text: 'Menu Terlaris'
                    }
                },
                legend: {
                    layout: 'vertical', 
                    align: 'right',
                    verticalAlign: 'middle'
                },
                plotOptions: {
                    series: {
                        allowPointSelect: true
                    }
                },
                series: [{
                    type: 'bar',
                    name: 'penjualan',
                    data: [
                     <?php if($penjualan->count() <= 0): ?>
                        {name: 'theres no data',}
                     <?php else: ?>
                     <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        {
                            name: '<?= $row->nama_menu ?>',
                            <?php if($row->total <= 0): ?>
                                y: <?= 0 ?>
                            <?php else: ?>
                                y: <?= $row->total ?>
                            <?php endif; ?>,
                        },
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                    ]
                }],
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'vertical',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }
         });
             </script>

    </div> <!-- container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('page.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel-pemweb\resources\views/page/dashboard/index.blade.php ENDPATH**/ ?>