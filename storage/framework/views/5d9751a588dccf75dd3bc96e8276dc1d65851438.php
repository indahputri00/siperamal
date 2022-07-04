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
            <div class="col-lg-6  mt-3">
                <div class="table-responsive m-b-40">
                    <form class="form-horizontal form-material" action="<?php echo e(url('/peminjaman')); ?>"
                          method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <?php echo $__env->make('peminjaman.form', ['formMode' => 'create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\bikinaplikasi\project\35roza\perpustakaan\resources\views/peminjaman/create.blade.php ENDPATH**/ ?>