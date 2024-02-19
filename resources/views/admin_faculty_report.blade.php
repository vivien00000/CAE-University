<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 80%;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Faculty ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birthdate</th>
            <th>Year Level</th>
            <th>Gender</th>
            <th>Mobile Number</th>
            <th>Email Address</th>
            <th>Date Entered</th>
            <th>Position</th>
            <th>Department</th>

        </tr>
        @foreach ($faculty as $f)
        <tr>
            <td>{{$f -> faculty_id}}</td>
            <td>{{$f -> first_name}}</td>
            <td>{{$f -> last_name}}</td>
            <td>{{$f -> birthdate}}</td>
            <td>{{$f -> year_level}}</td>
            <td>{{$f -> gender}}</td>
            <td>{{$f -> mobile_number}}</td>
            <td>{{$f -> email_address}}</td>
            <td>{{$f -> date_entered}}</td>
            <td>{{$f -> position}}</td>
            <td>{{$f -> department}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
