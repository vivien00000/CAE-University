<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/admin_navbar')
    <script src="js/admin.js"></script>
    <link rel="stylesheet" href="css/admin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <h5 id="std-text"><b>Students List</b></h5>
    <p id="std-count">Total Students: {{$total_students[0]->total}}</p>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="masterCheckbox" onchange="toggleCheckboxes()"></th>
                        <th>Student ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Date Enrolled</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $s)
                    <tr>
                        <td><input type="checkbox" name="student_ids[]" value="{{ $s->student_id }}"></td>
                        <td>{{ $s->student_id }}</td>
                        <td>{{ $s->last_name }}</td>
                        <td>{{ $s->first_name }}</td>
                        <td>{{ $s->date_enrolled }}</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-eye" title="View"></i></a>
                            <a href="#"><i class="fas fa-edit" title="Edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt" title="Delete"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
