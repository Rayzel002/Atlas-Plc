<!-- resources/views/persons/index.blade.php -->

 <!-- If you have a master layout -->

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Persons List</h1>

            <div>
                <a href="<?php echo e(route('persons.create')); ?>" class="btn btn-primary">Add Country</a>
                <button type="button" class="btn btn-danger" id="bulkDeleteButton">Bulk Delete</button>
            </div>
        </div>
        <form action="<?php echo e(route('persons.bulk.delete')); ?>" method="post" id="bulkDeleteForm">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>

            
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" name="selectAll" id="selectAll"></th>
                        <th>Face</th>
                        <th>Full name (FML)</th>
                        <th>Gender</th>
                        <th>Marital (children)</th>
                        <th>Status</th>
                        <th>Address</th>
                        <th>H<sub>(cm)</sub>:W<sub>(kg)</sub></th>
                        <th>Telephone 1</th>
                        <th>Telephone 2</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><input type="checkbox" name="select[]" value="<?php echo e($item->id); ?>"></td>
                            <td><img width="30" src="<?php echo e(asset('storage/'.$item->face_image_path)); ?>" alt=""></td>
                            <td><?php echo e($item->firstname); ?> <?php echo e($item->middlename); ?> <?php echo e($item->lastname); ?></td>
                            <td><?php echo e($item->gender); ?></td>
                            <td><?php echo e($item->marital_status); ?> (<?php echo e($item->number_of_children); ?>)</td>
                            <td><?php echo e($item->status); ?></td>
                            <td><?php echo e($item->address); ?></td>
                            <td><?php echo e($item->height); ?> : <?php echo e($item->weight); ?></td>
                            <td><?php echo e($item->telephone_number); ?></td>
                            <td><?php echo e($item->seconde_telephone_number); ?></td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </form>

        
        <?php echo e($data->links()); ?>

    </div>

<script src="<?php echo e(asset('js/person/views.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/persons/index.blade.php ENDPATH**/ ?>