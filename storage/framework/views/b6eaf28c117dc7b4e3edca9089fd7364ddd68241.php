<?php $__env->startSection('content'); ?>
    <!-- Material form subscription -->
<div class="card">

    <h5 class="card-header danger-color-dark white-text text-center py-4">
        <strong>Tambah Data Kategori</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-sm-5">

        <!-- Form -->
        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        
        <form action="/kategori/update" method="post" class="text-center" style="color: #757575;" action="#!">

        

            <!-- Name -->
            <div class="md-form mt-3">
            <input value="<?php echo e($k -> id); ?>" type="text" id="materialSubscriptionFormPasswords" class="form-control">
                <label for="materialSubscriptionFormPasswords">ID</label>
            </div>

            <!-- E-mai -->
            <div class="md-form">
            <input value="<?php echo e($k -> nama); ?>" type="text" id="materialSubscriptionFormEmail" class="form-control">
                <label for="materialSubscriptionFormEmail">Nama</label>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-outline-danger btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Submit</button>

        </form>
        <!-- Form -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
</form>
<!-- Material form subscription -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\finalprojectsp3\resources\views//kategori/edit.blade.php ENDPATH**/ ?>