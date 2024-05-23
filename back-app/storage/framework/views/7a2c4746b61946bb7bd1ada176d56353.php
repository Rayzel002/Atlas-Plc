<!-- resources/views/persons/forms/languages_form.blade.php -->

<fieldset>
    <legend>Languages</legend>

    <table class="table" id="languages-table">
        <thead>
            <tr>
                <th>n.o</th>
                <th>Language</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            
            <tr class="add-row">
                <td></td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="addLanguageRow()">Add Language</button>
                </td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <script>
        // course table
        function addLanguageRow() {
            const tableBody = document.querySelector('#languages-table tbody');
            const rowCount = tableBody.querySelectorAll('tr:not(.add-row)').length;

            // Create a new row
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td></td>
                <td>
                    <select class="form-select" name="languages[]">
                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($language->id); ?>"><?php echo e($language->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="removeLanguageRow(this)">Remove</button>
                </td>
            `;

            // Insert the new row above the "Add" row
            const addRow = tableBody.querySelector('.add-row');
            tableBody.insertBefore(newRow, addRow);

            // Update language numbers
            updateLanguageNumbers();
        }


        function removeLanguageRow(button) {
            // Remove the row containing the clicked remove button
            const row = button.closest('tr');
            row.remove();

            // Update language numbers
            updateLanguageNumbers();
        }

        function updateLanguageNumbers() {
            const tableBody = document.querySelector('#languages-table tbody');
            const rows = tableBody.querySelectorAll('tr:not(.add-row)');

            // Update language numbers sequentially
            rows.forEach((row, index) => {
                row.querySelector('td:first-child').textContent = index + 1;
            });
        }
    </script>
</fieldset>
<?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/persons/fieldsets/languages_fieldset.blade.php ENDPATH**/ ?>