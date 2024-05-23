<!-- resources/views/persons/forms/courses_form.blade.php -->

<fieldset>
    <legend>Courses</legend>

    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>n.o</th>
                <th>Course Name</th>
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
                    <button type="button" class="btn btn-primary" onclick="addCourseRow()">Add Course</button>
                </td>
                <td></td>
            </tr>
        </tfoot>
    </table>
    <script>

        // course table
        function addCourseRow() {
            const tableBody = document.querySelector('#courses-table tbody'); // Fix: Change to #courses-table
            const rowCount = tableBody.querySelectorAll('tr:not(.add-row)').length;

            // Create a new row
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${rowCount + 1}</td>
                <td>
                    <input type="text" name="courses[]" class="form-control">
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="removeCourseRow(this)">Remove</button>
                </td>
            `;

            // Insert the new row above the "Add" row
            const addRow = tableBody.querySelector('.add-row');
            tableBody.insertBefore(newRow, addRow);

            // Update course numbers
            updateCourseNumbers();
        }

        function removeCourseRow(button) {
            // Remove the row containing the clicked remove button
            const row = button.closest('tr');
            row.remove();

            // Update course numbers
            updateCourseNumbers();
        }

        function updateCourseNumbers() {
            const tableBody = document.querySelector('#courses-table tbody');
            const rows = tableBody.querySelectorAll('tr:not(.add-row)');

            // Update course numbers sequentially
            rows.forEach((row, index) => {
                row.querySelector('td:first-child').textContent = index + 1;
            });
        }

    </script>
</fieldset>
<?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/persons/fieldsets/courses_fieldset.blade.php ENDPATH**/ ?>