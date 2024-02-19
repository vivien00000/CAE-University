<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/admin_navbar')
    <script src="js/admin.js"></script>
    <link rel="stylesheet" href="css/admin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <h5 id="std-text"><b>Students List</b>    <a href="/students/create"><i class=" fa fa-plus-circle" title="Add"></i></a> <a href="/students/report"><i class=" fa fa-file" title="Generate Report"></i> </a> </h5>
    <p id="std-count">Total Students: {{$total_students[0] -> total}}</p>
    <div class="container mt-5" id="conts">
        <div class="col-lg-12 offset-1 border border-light">
            <strong>Filter</strong>
            <form action="/students" method="GET">
                <select name="order_by">
                    <option value="" selected id="year_level">Year Level</option>
                    <option value="last_name">First Year</option>
                    <option value="first_name">Second Year</option>
                    <option value="first_name">Third Year</option>
                    <option value="first_name">Fourth Year</option>
                </select>

                <select name="department">
                    <option value="" selected id="depart">Department</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Business Administration">Business Administration</option>
                    <option value="Engineering">Engineering</option>
                </select>
                <button type="submit" style="border: none; background: none; cursor: pointer;">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>

    <div class="card mt-2">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="masterCheckbox" onchange="toggleCheckboxes()"></th>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Year Level</th>
                        <th>Email Address</th>
                        <th>Date Enrolled</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $s)
                    <tr>
                        <td><input type="checkbox" name="student_ids[]" value="{{ $s -> student_id }}"></td>
                        <td>{{ $s -> student_id }}</td>
                        <td>{{ $s -> last_name }} , {{ $s -> first_name }} </td>
                        <td>{{ $s -> year_level }}</td>
                        <td>{{ $s -> email_address}}</td>
                        <td>{{ $s -> date_enrolled }}</td>
                        <td class="action-icons">
                            <form action="/students/{{$s->student_id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/students/{{$s -> student_id}}"><i class="fas fa-eye" title="View"></i></a>
                                <a href="/students/edit/{{$s -> student_id}}"><i class="fas fa-edit"  title="Edit"></i></a>
                                <button type="submit" style="border: none; color: red;  padding-right: -50%; margin: 0;"> <i class="fas fa-trash-alt" title="Delete"></i>
                                </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
