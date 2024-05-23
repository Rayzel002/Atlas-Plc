<!-- resources/views/persons/index.blade.php -->

 <!-- If you have a master layout -->

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Languages List</h1>

        <div>
            <a href="<?php echo e(route('languages.create')); ?>" class="btn btn-primary">Add Language</a>
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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><input type="checkbox" name="select[]" value="<?php echo e($language->id); ?>"></td>
                        <td><?php echo e($language->id); ?></td>
                        <td><?php echo e($language->name); ?></td>
                        <td>
                            
                            
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </form>
    
    <div class="d-flex justify-content-center">
        <?php echo e($languages->links()); ?>

    </div>
</div>
<script src="<?php echo e(asset('js/person/views.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/languages/index.blade.php ENDPATH**/ ?>