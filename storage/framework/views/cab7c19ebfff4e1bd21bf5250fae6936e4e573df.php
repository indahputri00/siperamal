<?php $__env->startSection('content'); ?>
    <div class="container-fluid card">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap mt-3">
                    <h2 class="title-1">Buku</h2>
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
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Kota</th>
                            <th>Exemplar</th>
                            <th>Ditambahkan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-id='<?php echo e($item->id); ?>'>
                                <td>
                                    <?php echo e($loop->iteration); ?>

                                </td>

                                <td><?php echo e($item->kode_buku); ?></td>
                                <td><?php echo e($item->judul); ?></td>
                                <td><?php echo e($item->penulis); ?></td>
                                <td><?php echo e($item->penerbit); ?></td>
                                <td><?php echo e($item->tahun); ?></td>
                                <td><?php echo e($item->kota); ?></td>
                                <td><?php echo e($item->exemplar); ?></td>
                                <td><?php echo e($item->ditambahkan); ?></td>

                                <td class="text-center">
                                    <a class="badge badge-primary"
                                       href="<?php echo e(url('/buku/' . $item->id . '/edit')); ?>">Edit</a>
                                    <form action="<?php echo e(url('/buku' . '/' . $item->id)); ?>" method='post'
                                          style='display: inline;'
                                          onsubmit="return confirm('Yakin akan menghapus data ini?')">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <label class="badge badge-danger" href="" for='btnSubmit-<?php echo e($item->id); ?>'
                                               style='cursor: pointer;'>Hapus</label>
                                        <button type="submit" id='btnSubmit-<?php echo e($item->id); ?>'
                                                style="display: none;"></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script>
        const locationHrefHapusSemua = "<?php echo e(url('buku/hapus_semua')); ?>";
        const locationHrefAktifkanSemua = "<?php echo e(url('buku/aktifkan_semua')); ?>";
        const locationHrefCreate = "<?php echo e(url('buku/create')); ?>";
        var columnOrders = [<?php echo e($buku_count); ?>];
        var urlSearch = "<?php echo e(url('buku')); ?>";
        var q = "<?php echo e($_GET['q'] ?? ''); ?>";
        var placeholder = "Filter...";
        var tampilkan_buttons = true;
        var button_manual = true;
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bikinaplikasi\project\35roza\perpustakaan\resources\views/buku/index.blade.php ENDPATH**/ ?>