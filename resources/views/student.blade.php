<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    <link rel="stylesheet" href="css/styles.css" />
    <title>Students</title>
</head>

<body>
    @include('layouts/navbar')
    @include('layouts/messages')
    <div class="container-fluid">
        <form action="/admin/students" method="GET">
            <div class="row">
                <div class="col-lg-3 border border-dark">
                    <strong>Search</strong>
                    <input type="text" name="search" value=""/>
                </div>
                <div class="col-lg-3 border border-dark">
                    <strong>Filter</strong>
                    <select name="year_level">
                        <option value="" selected>Any year level</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                    </select>

                    <select name="gender">
                        <option value="" selected>Any gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-lg-3 border border-dark" >
                    <input type="submit" class="btn btn-success" />
                </div>
            </div>
        </form>
    </div>
    <h1>Students</h1>
    <p>Total students: {{$total_student -> total}} <a href="/admin/students/create" class="btn btn-success"> + Add </a> </p>
    <table class="table">
        <style>
            a {
                color: red;
            }
        </style>
        <tr>
            <th>First name</th>
            <th>@sortablelink('last_name', 'Last name')</th>
            <th>@sortablelink('year_level', 'Year level')</th>
            <th>Province</th>
            <th>More Info</th>
            <th>Edit Entry</th>
            <th>Delete Entry</th>
            <th>Send Email</th>
        </tr>
        @foreach ($students as $s)
        <tr>
            <td>{{$s -> first_name}}</td>
            <td>{{$s -> last_name}}</td>
            <td>{{$s -> year_level}}</td>
            <td>{{$s -> province}}</td>
            <td><a href="/admin/students/{{$s -> student_id}}" class="btn btn-primary">View</a></td>
            <td><a href="/admin/students/edit/{{$s -> student_id}}" class="btn btn-warning">Edit</a></td>
            <td>
                <a data-bs-toggle="modal" data-bs-target="#delete_{{$s -> student_id}}" class="btn btn-danger">Delete</a>
            </td>
            <td><a href="/admin/students/send/{{$s -> student_id}}" class="btn btn-success">Send Email</a></td>

            <div class="modal fade" id="delete_{{$s -> student_id}}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete {{$s -> last_name}}, {{$s->first_name}}? ({{$s -> student_id}})</h5>
                            <button class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">Once this action is taken, it cannot be undone.
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">
                                    Cancel
                                </button>
                                <form action="/admin/students/{{$s -> student_id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </tr>
        @endforeach
    </table>
    {{$students -> links('pagination::bootstrap-5')}}
    <h2>Male students:</h2>
    <table class="table">
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Province</th>
        </tr>
        @foreach ($students_male as $sm)
        <tr>
            <td>{{$sm -> first_name}}</td>
            <td>{{$sm -> last_name}}</td>
            <td>{{$sm -> gender}}</td>
            <td>{{$sm -> province}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>