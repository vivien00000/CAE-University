<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/admin_navbar')
    <script src="js/admin.js"></script>
    <link rel="stylesheet" href="css/admin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <h5 id="std-text"><b>Faculty List</b>   <a href="/admin_faculty/create"><i class="fa fa-plus-circle" title="Add"></i></a> <a href="/admin_faculty/report"><i class=" fa fa-file" title="Generate Report"></i></a></h5>
    <p id="std-count">Total Faculty: {{$total_faculty[0] ->total}}</p>

    <div class="container mt-5" id="conts">
        <div class="col-lg-12 offset-1 border border-light">
            <strong>Filter</strong>
            <form action="/admin_faculty" method="GET">
                <select name="order_by">
                    <option value="" selected id="room_number">Name</option>
                    <option value="last_name">Last Name</option>
                    <option value="first_name">First Name</option>
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
                        <th>Faculty ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($faculty as $f)
                    <tr>
                        <td><input type="checkbox" name="faculty_ids[]" value="{{ $f->faculty_id }}"></td>
                        <td>{{ $f->faculty_id }}</td>
                        <td>{{ $f->last_name }}, {{ $f->first_name }}</td>
                        <td>{{ $f->position }}</td>
                        <td>{{ $f->department }}</td>
                        <td class="action-icons">
                            <form action="/admin_faculty/{{$f->faculty_id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/admin_faculty/{{$f -> faculty_id}}"><i class="fas fa-eye" title="View"></i></a>
                                <a href="/admin_faculty/edit/{{$f -> faculty_id}}"><i class="fas fa-edit"  title="Edit"></i></a>
                                <button type="submit" style="border: none; color: red;  padding-right: -50%; margin: 0;"> <i class="fas fa-trash-alt" title="Delete"></i>
                                </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
