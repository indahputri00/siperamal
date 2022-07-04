<?php $__env->startSection('content'); ?>
    <div class="container-fluid card">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap mt-3">
                    <h2 class="title-1">Pengembalian</h2>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-12  mt-3">
                <div class="table-responsive m-b-40">
                    <table class="table" id='dataTable'>
                            <thead>
                            <tr>
                                <th width=2>#</th>
                                <th>Peminjaman Id</th>
                                <th>Tanggal</th>
                                <th>Denda Terlambat</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Jatuh Tempo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $pengembalian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr data-id='<?php echo e($item->id); ?>'>
                                    <td>
                                        <?php echo e($loop->iteration); ?>

                                    </td>

                                    <td><?php echo e($item->peminjaman->anggota->nama); ?></td>
                                    <td><?php echo e($item->tanggal); ?></td>
                                    <td><?php echo e(toIdr($item->denda_terlambat)); ?></td>
                                    <td><?php echo e($item->peminjaman->tanggal); ?></td>
                                    <td><?php echo e($item->peminjaman->tanggal_pengembalian); ?></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                </div>
            </div>

        </div>
    </div>

    <script>
        const locationHrefHapusSemua = "<?php echo e(url('pengembalian/hapus_semua')); ?>";
        const locationHrefAktifkanSemua = "<?php echo e(url('pengembalian/aktifkan_semua')); ?>";
        const locationHrefCreate = "<?php echo e(url('pengembalian/create')); ?>";
        var columnOrders = [<?php echo e($pengembalian_count); ?>];
        var urlSearch = "<?php echo e(url('pengembalian')); ?>";
        var q = "<?php echo e($_GET['q'] ?? ''); ?>";
        var placeholder = "Filter...";
        var tampilkan_buttons = false;
        var button_manual = false;
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bikinaplikasi\project\35roza\perpustakaan\resources\views/pengembalian/index.blade.php ENDPATH**/ ?>