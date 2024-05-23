<!-- resources/views/countries/create.blade.php -->

 <!-- If you have a master layout -->

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Create a New Religion</h1>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('religions.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-md-6">
                    <!-- Basic Information -->
                    <div class="form-group">
                        <!-- ID -->
                        <label for="id">ID:</label>
                        <input type="text" name="id" id="id" class="form-control" value="<?php echo e($nextId); ?>" readonly>

                        <!-- Name -->
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>

                </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3">Save Religion</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/religions/create.blade.php ENDPATH**/ ?>