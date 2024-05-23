<?php $__env->startSection('content'); ?>

<div class="container">
    <h1>Dashboard</h1>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('persons.index')); ?>">Persons</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('professions.index')); ?>">Professions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('countries.index')); ?>">Countries</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('religions.index')); ?>">Religions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('employmentTypes.index')); ?>">Types of employment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('educationLevels.index')); ?>">Education leveles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('languages.index')); ?>">Languages</a>
        </li>
    </ul>

    <div class="tab-content mt-2">
        <?php echo $__env->yieldContent('tab_content'); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/home.blade.php ENDPATH**/ ?>