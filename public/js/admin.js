// document.getElementById('filterInput').addEventListener('keyup', function() {
//     const filterValue = this.value.toLowerCase();
//     const rows = document.querySelectorAll('#studentTable tbody tr');

//     rows.forEach(row => {
//         const studentId = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
//         const name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
//         const department = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
//         const yearLevel = row.querySelector('td:nth-child(4)').textContent.toLowerCase();

//         if (studentId.includes(filterValue) || name.includes(filterValue) || department.includes(filterValue) || yearLevel.includes(filterValue)) {
//             row.style.display = '';
//         } else {
//             row.style.display = 'none';
//         }
//     });
// });

function toggleCheckboxes() {
    var checkboxes = document.querySelectorAll('input[name="student_ids[]"]');
    var masterCheckbox = document.querySelector('#masterCheckbox');

    checkboxes.forEach(function(checkbox) {
        checkbox.checked = masterCheckbox.checked;
    });
}

