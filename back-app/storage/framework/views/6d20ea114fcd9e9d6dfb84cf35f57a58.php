<!-- resources/views/persons/forms/passports_form.blade.php -->

<fieldset>
    <legend>Passports</legend>

    <table class="table" id="passports-table">
        <thead>
            <tr>
                <th>n.o</th>
                <th>Passport Number</th>
                <th>Date of Issue</th>
                <th>Date of Expiry</th>
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
                <td>
                    <button type="button" class="btn btn-primary" onclick="addPassportRow()">Add Passport</button>
                </td>
            </tr>
        </tfoot>
    </table>

    <script>
        // Passport table
        function addPassportRow() {
            const tableBody = document.querySelector('#passports-table tbody');
            const rowCount = tableBody.querySelectorAll('tr:not(.add-row)').length;

            // Create a new row
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>
                    ${rowCount}
                </td>
                <td>
                    <input type="text" name="passports[${rowCount}][passport_number]" class="form-control">
                </td>
                <td>
                    <input type="date" name="passports[${rowCount}][passport_date_issue]" class="form-control">
                </td>
                <td>
                    <input type="date" name="passports[${rowCount}][passport_date_expiry]" class="form-control">
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="removePassportRow(this)">Remove</button>
                </td>
            `;

            // Insert the new row above the "Add" row
            const addRow = tableBody.querySelector('.add-row');
            tableBody.insertBefore(newRow, addRow);

            // Update passport numbers
            updatePassportNumbers();
        }

        function removePassportRow(button) {
            // Remove the row containing the clicked remove button
            const row = button.closest('tr');
            row.remove();

            // Update passport numbers
            updatePassportNumbers();
        }

        function updatePassportNumbers() {
            const tableBody = document.querySelector('#passports-table tbody');
            const rows = tableBody.querySelectorAll('tr:not(.add-row)');

            // Update passport numbers sequentially
            rows.forEach((row, index) => {
                row.querySelector('td:first-child').textContent = index + 1;
            });
        }
    </script>
</fieldset>
<?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/persons/fieldsets/passports_fieldset.blade.php ENDPATH**/ ?>