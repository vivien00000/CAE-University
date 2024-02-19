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
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birthdate</th>
            <th>Year Level</th>
            <th>Gender</th>
            <th>Mobile Number</th>
            <th>Email Address</th>
            <th>Date Enrolled</th>
            <th>Province</th>
        </tr>
        @foreach ($students as $s)
        <tr>
            <td>{{$s -> student_id}}</td>
            <td>{{$s -> first_name}}</td>
            <td>{{$s -> last_name}}</td>
            <td>{{$s -> birthdate}}</td>
            <td>{{$s -> year_level}}</td>
            <td>{{$s -> gender}}</td>
            <td>{{$s -> mobile_number}}</td>
            <td>{{$s -> email_address}}</td>
            <td>{{$s -> date_enrolled}}</td>
            <td>{{$s -> province}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>