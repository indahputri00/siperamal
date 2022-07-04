<?php $__env->startSection('content'); ?>

<h3 align="center">LAPORAN BUKU</h3>

<table width="100%" border="1" style='margin-bottom: 250px;'>
    <thead>
        <tr>
            <th width=3>No.</th>
            <th>Nama</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $buku_tamus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku_tamu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th><?php echo e($loop->iteration); ?>.</th>
            <td><?php echo e($buku_tamu->nama); ?></td>
            <td><?php echo e($buku_tamu->created_at); ?></td>
            <td><?php echo e($buku_tamu->updated_at); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bikinaplikasi\project\35roza\perpustakaan\resources\views/buku-tamu/laporan/print.blade.php ENDPATH**/ ?>