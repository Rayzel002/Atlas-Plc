<!-- resources/views/persons/forms/courses_form.blade.php -->

<fieldset>
    <legend>Relatives</legend>

    <table class="table" id="relatives-table">
        <thead>
            <tr>
                <th>n.o</th>
                <th>Full Name</th>
                <th>Relationship</th>
                <th>Address</th>
                <th>Tel 1</th>
                <th>Tel 2(Optionnel)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            
            <tr class="add-row">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="addRelativeRow()">Add Relative</button>
                </td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <script>
        // course table
        function addRelativeRow() {
            const tableBody = document.querySelector('#relatives-table tbody'); // Fix: Change to #relatives-table
            const rowCount = tableBody.querySelectorAll('tr:not(.add-row)').length;

            // Create a new row
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>
                   ${rowCount}
                </td>
                <td>
                    <input type="text" name="relatives[${rowCount}][full_name]" class="form-control">
                </td>
                <td>
                    <input type="text" name="relatives[${rowCount}][relationship]" class="form-control">
                </td>
                <td>
                    <input type="text" name="relatives[${rowCount}][address]" class="form-control">
                </td>
                <td>
                    <input type="text" name="relatives[${rowCount}][telephone_number]" class="form-control">
                </td>
                <td>
                    <input type="text" name="relatives[${rowCount}][second_telephone_number]" class="form-control">
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="removeRelativeRow(this)">Remove</button>
                </td>
            `;

            // Insert the new row above the "Add" row
            const addRow = tableBody.querySelector('.add-row');
            tableBody.insertBefore(newRow, addRow);

            // Update relative numbers
            updateRelativeNumbers();
        }

        function removeRelativeRow(button) {
            // Remove the row containing the clicked remove button
            const row = button.closest('tr');
            row.remove();

            // Update relative numbers
            updateRelativeNumbers();
        }

        function updateRelativeNumbers() {
            const tableBody = document.querySelector('#relatives-table tbody');
            const rows = tableBody.querySelectorAll('tr:not(.add-row)');

            // Update relative numbers sequentially
            rows.forEach((row, index) => {
                row.querySelector('td:first-child').textContent = index + 1;
            });
        }
    </script>
</fieldset>
<?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/persons/fieldsets/relatives_fieldset.blade.php ENDPATH**/ ?>