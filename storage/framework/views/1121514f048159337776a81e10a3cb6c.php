
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA DETAIL</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/detail/' .$row->detail_id)); ?>" method="post">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">NAMA PELANGGAN</label>
                        <select name="detail_pelanggan_id" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($pel->pelanggan_id); ?>"><?php echo e($pel->pelanggan_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">BARANG</label>
                        <select name="detail_barang_id" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($brg->barang_id); ?>"><?php echo e($brg->barang_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH</label>
                        <input type="text" name="detail_jumlah" class="form-control" value="<?php echo e($row->detail_jumlah); ?>">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI3\pbwl-uas-indah\resources\views/detail/edit.blade.php ENDPATH**/ ?>