<!-- resources/views/countries/index.blade.php -->



<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Countries List</h1>

        <div>
            <a href="<?php echo e(route('countries.create')); ?>" class="btn btn-primary">Add Country</a>
            <button type="button" class="btn btn-danger" id="bulkDeleteButton">Bulk Delete</button>
        </div>
    </div>
    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('countries.bulk.delete')); ?>" method="post" id="bulkDeleteForm">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>

        <table class="table">
            <thead>
                <tr>
                    <th><input type="checkbox" name="selectAll" id="selectAll"></th>
                    <th>Flag</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code 1</th>
                    <th>Code 2</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><input type="checkbox" name="select[]" value="<?php echo e($country->id); ?>"></td>
                    <td><img width="30" src="<?php echo e(asset('storage/'.$country->flag_path)); ?>" alt=""></td>
                    <td><?php echo e($country->id); ?></td>
                    <td><?php echo e($country->name); ?></td>
                    <td><?php echo e($country->code_1); ?></td>
                    <td><?php echo e($country->code_2); ?></td>
                    <td><img width="70" src="<?php echo e(asset('storage/'.$country->image_path)); ?>" alt=""></td>
                    <td>
                        
                        <a href="<?php echo e(route('countries.edit', ['country' => $country->id])); ?>" class="btn btn-primary">Edit</a>
                        
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </form>

    <div class="d-flex justify-content-center">
        <?php echo e($countries->links()); ?>

    </div>
</div>

<script src="<?php echo e(asset('js/person/views.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/countries/index.blade.php ENDPATH**/ ?>