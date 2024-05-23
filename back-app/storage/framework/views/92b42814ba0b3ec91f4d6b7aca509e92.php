<!-- resources/views/countries/create.blade.php -->

 <!-- If you have a master layout -->

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Create a New Country</h1>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('countries.update', ['country' => $country->country_id])); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="row">
                <div class="col-md-6">
                    <!-- Basic Information -->
                    <div class="form-group">

                        <!-- First Name -->
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo e($country->name); ?>" required>

                        <!-- Middle Name -->
                        <label for="code_1">Code_1:</label>
                        <input type="text" name="code_1" id="code_1" class="form-control" value="<?php echo e($country->code_1); ?>">

                        <!-- Last Name -->
                        <label for="code_2">Code_2:</label>
                        <input type="text" name="code_2" id="code_2" class="form-control" value="<?php echo e($country->code_2); ?>"required>

                        <!-- Flag Image -->
                        <div class="form-group">
                            <label for="flag">Current Flag:</label>
                            <img width="32" src="<?php echo e(asset('storage/'.$country->flag)); ?>" alt="">
                        </div>

                        <div class="form-group">
                            <label for="flag">Choose New Flag:</label>
                            <input type="file" name="flag" id="flag" class="form-control-file" accept="image/*" required>
                        </div>
                </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3">Save Country</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/countries/edit.blade.php ENDPATH**/ ?>