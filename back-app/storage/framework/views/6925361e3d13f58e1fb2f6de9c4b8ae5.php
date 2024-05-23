<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Create a New Person</h1>

        <!-- Bootstrap Grid Container -->
        <div class="row">
            <div class="col">
                <!-- Tabs -->
                <ul class="nav nav-tabs" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="basicInfoTab" data-toggle="tab" href="#basicInfo">Basic Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="relativesTab" data-toggle="tab" href="#relatives">Relatives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="coursesTab" data-toggle="tab" href="#courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="languagesTab" data-toggle="tab" href="#languages">Languages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="skillsTab" data-toggle="tab" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="skillsTab" data-toggle="tab" href="#skills">Passports</a>
                    </li>
                </ul>
            </div>
            <!-- Add space between tabs and the submit button -->
            <div class="col-md-auto ml-auto">
                <!-- Submit Button -->
                <button id="personSubmitBtn" type="submit" class="btn btn-primary mt-3">Save Person</button>
            </div>
        </div>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger mt-3">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>

        <form id="personForm" action="<?php echo e(route('persons.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="tab-pane d-block" id="basic-informations">
                <?php echo $__env->make('persons.fieldsets.basic_informations_fieldset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane d-none" id="relatives">
                <?php echo $__env->make('persons.fieldsets.relatives_fieldset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane d-none" id="courses">
                <?php echo $__env->make('persons.fieldsets.courses_fieldset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
            </div>
            <div class="tab-pane d-none" id="languages">
                <?php echo $__env->make('persons.fieldsets.languages_fieldset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane d-none" id="skills">
                <?php echo $__env->make('persons.fieldsets.skills_fieldset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane d-none" id="passports">
                <?php echo $__env->make('persons.fieldsets.passports_fieldset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/persons/create.blade.php ENDPATH**/ ?>