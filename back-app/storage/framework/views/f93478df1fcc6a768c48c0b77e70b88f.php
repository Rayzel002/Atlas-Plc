<fieldset>
    <legend>Basic Information</legend>
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- Basic Information -->
            <div class="form-group">

                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>

                <label for="middlename">Middle Name:</label>
                <input type="text" name="middlename" id="middlename" class="form-control">

                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>

                <label for="mothername">Mother Name:</label>
                <input type="text" name="mothername" id="mothername" class="form-control">
            </div>
        </div>

        <div class="col-md-6">
            <!-- Date Of Birth -->
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>

                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="3" required></textarea>

                <label>Gender:</label>
                <div class="form-check">
                    <input type="radio" name="gender" id="gender-male" value="Male" class="form-check-input" required>
                    <label for="gender-male" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" id="gender-female" value="Female" class="form-check-input" required>
                    <label for="gender-female" class="form-check-label">Female</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Years of Experience -->
            <div class="form-group">
                <label for="years_of_experience">Years of Experience:</label>
                <input type="number" name="years_of_experience" id="years_of_experience" class="form-control" required>

                <label for="marital_status">Marital Status:</label>
                <select name="marital_status" id="marital_status" class="form-control" required>
                    <option value="" disabled selected>Select marital status</option>
                    <option value="Married">Married</option>
                    <option value="Unmarried">Unmarried</option>
                    <option value="Not-specified">Not Specified</option>
                </select>

                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="" disabled selected>Select status</option>
                    <option value="available">Available</option>
                    <option value="not available">Not Available</option>
                    <option value="busy">Busy</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Address -->
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" id="address" class="form-control" rows="3"></textarea>

                <label for="number_of_children">Number of Children:</label>
                <input type="number" name="number_of_children" id="number_of_children" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Height -->
            <div class="form-group">
                <label for="height">Height (cm):</label>
                <input type="text" name="height" id="height" class="form-control" required>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Weight -->
            <div class="form-group">
                <label for="weight">Weight (kg):</label>
                <input type="text" name="weight" id="weight" class="form-control" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Face Image -->
            <div class="form-group">
                <label for="face_image">Face Image:</label>
                <input type="file" name="face_image" id="face_image" class="form-control-file" required>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Full Image -->
            <div class="form-group">
                <label for="full_image">Full Image:</label>
                <input type="file" name="full_image" id="full_image" class="form-control-file">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- Telephone Numbers -->
            <div class="form-group">
                <label for="telephone_number">Telephone Number:</label>
                <input type="tel" name="telephone_number" id="telephone_number" class="form-control" required>
            </div>
        </div>

        <div class="col-md-6">
            <label for="second_telephone_number">Second Telephone Number:</label>
            <input type="tel" name="second_telephone_number" id="second_telephone_number" class="form-control">
        </div>
    </div>

    <div class="row">
        <!-- Profession -->
        <div class="col-md-4 mb-3">
            <label for="profession">Profession:</label>
            <select name="profession_id" id="profession" class="form-control" required>
                <option value="" disabled selected>Select a profession</option>
                <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($profession->id); ?>"><?php echo e($profession->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Country -->
        <div class="col-md-4 mb-3">
            <label for="country">Country:</label>
            <select name="country_id" id="country" class="form-control" required>
                <option value="" disabled selected>Select a country</option>
                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Religion -->
        <div class="col-md-4 mb-3">
            <label for="religion">Religion:</label>
            <select name="religion_id" id="religion" class="form-control" required>
                <option value="" disabled selected>Select a religion</option>
                <?php $__currentLoopData = $religions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $religion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($religion->id); ?>"><?php echo e($religion->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Employment Type -->
        <div class="col-md-4 mb-3">
            <label for="employmentType">Employment Type:</label>
            <select name="employment_type_id" id="employmentType" class="form-control" required>
                <option value="" disabled selected>Select an employment type</option>
                <?php $__currentLoopData = $employmentTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employmentType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($employmentType->id); ?>"><?php echo e($employmentType->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Education Level -->
        <div class="col-md-4 mb-3">
            <label for="educationLevel">Education Level:</label>
            <select name="education_level_id" id="educationLevel" class="form-control" required>
                <option value="" disabled selected>Select an education level</option>
                <?php $__currentLoopData = $educationLevels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $educationLevel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($educationLevel->id); ?>"><?php echo e($educationLevel->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</fieldset>
<?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/persons/fieldsets/basic_informations_fieldset.blade.php ENDPATH**/ ?>