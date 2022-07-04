<?php $__env->startSection('content'); ?>
    <div class="container-fluid card">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap mt-3">
                    <h2 class="title-1">Peminjaman</h2>
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
                                <th>Anggota Id</th>
                                <th>User Petugas Id</th>
                                <th>Tanggal</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr data-id='<?php echo e($item->id); ?>'>
                                    <td>
                                        <?php echo e($loop->iteration); ?>

                                    </td>

                                    <td><?php echo e($item->anggota->nama); ?></td>
                                    <td><?php echo e($item->user_petugas->name); ?></td>
                                    <td><?php echo e($item->tanggal); ?></td>
                                    <td><?php echo e($item->tanggal_pengembalian); ?></td>
                                    <td><?php echo e($item->status); ?></td>

                                    <td class="text-center">
                                        <?php if(now()->lte(\Carbon\Carbon::parse($item->tanggal_pengembalian)) && (now()->diffInDays(Carbon\Carbon::parse($item->tanggal_pengembalian)) <= env('APP_MIN_HARI_KIRIM_PEMBERITAHUAN')) && $item->status == 'Berlangsung'): ?>
                                            <a class="badge badge-success"
                                               href="<?php echo e(str_replace('#no_telepon#', $item->anggota->no_telepon, env('APP_LINK_WA_PEMBERITAHUAN'))); ?>">Kirim
                                                Pemberitahuan</a>
                                        <?php endif; ?>

                                        <a class="badge badge-info" href="<?php echo e(url('/peminjaman/' . $item->id)); ?>">Detail
                                            / Pengembalian</a>
                                        <a class="badge badge-primary"
                                           href="<?php echo e(url('/peminjaman/' . $item->id . '/edit')); ?>">Edit</a>
                                        <form action="<?php echo e(url('/peminjaman' . '/' . $item->id)); ?>" method='post'
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
        const locationHrefHapusSemua = "<?php echo e(url('peminjaman/hapus_semua')); ?>?anggota_id=<?php echo e(request('anggota_id')); ?>";
        const locationHrefAktifkanSemua = "<?php echo e(url('peminjaman/aktifkan_semua')); ?>?anggota_id=<?php echo e(request('anggota_id')); ?>";
        const locationHrefCreate = "<?php echo e(url('peminjaman/create')); ?>?anggota_id=<?php echo e(request('anggota_id')); ?>";
        var columnOrders = [<?php echo e($peminjaman_count); ?>];
        var urlSearch = "<?php echo e(url('peminjaman')); ?>?anggota_id=<?php echo e(request('anggota_id')); ?>";
        var q = "<?php echo e($_GET['q'] ?? ''); ?>";
        var placeholder = "Filter...";
        var tampilkan_buttons = true;
        var button_manual = true;
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bikinaplikasi\project\35roza\perpustakaan\resources\views/peminjaman/index.blade.php ENDPATH**/ ?>