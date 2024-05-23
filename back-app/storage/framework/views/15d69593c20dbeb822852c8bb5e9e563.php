<!-- resources/views/persons/forms/skills_form.blade.php -->

<fieldset>
    <legend>Skills</legend>

    <table class="table" id="skills-table">
        <thead>
            <tr>
                <th>n.o</th>
                <th>Skill Name</th>
                <th>Status</th>
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
                <td>
                    <button type="button" class="btn btn-primary" onclick="addSkillRow()">Add Skill</button>
                </td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <script>
        // int {{}}
        // skill table
        function addSkillRow() {
            const tableBody = document.querySelector('#skills-table tbody'); // Fix: Change to #skills-table
            const rowCount = tableBody.querySelectorAll('tr:not(.add-row)').length;

            // Create a new row
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${rowCount}</td>
                <td>
                    <input type="text" name="skills[${rowCount}][name]" class="form-control">
                </td>
                <td>
                    <select class="form-select" name="skills[${rowCount}][status]">
                        <option value="1">ok</option>
                        <option value="0">not ok</option>
                    </select>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="removeSkillRow(this)">Remove</button>
                </td>
            `;

            // Insert the new row above the "Add" row
            const addRow = tableBody.querySelector('.add-row');
            tableBody.insertBefore(newRow, addRow);

            // Update skill numbers
            updateSkillNumbers();
        }

        function removeSkillRow(button) {
            // Remove the row containing the clicked remove button
            const row = button.closest('tr');
            row.remove();

            // Update skill numbers
            updateSkillNumbers();
        }

        function updateSkillNumbers() {
            const tableBody = document.querySelector('#skills-table tbody');
            const rows = tableBody.querySelectorAll('tr:not(.add-row)');

            // Update skill numbers sequentially
            rows.forEach((row, index) => {
                row.querySelector('td:first-child').textContent = index + 1;
            });
        }
    </script>
</fieldset>
<?php /**PATH C:\Users\Admin\Desktop\Atlas-plc\back-app\resources\views/persons/fieldsets/skills_fieldset.blade.php ENDPATH**/ ?>