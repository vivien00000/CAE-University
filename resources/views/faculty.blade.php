<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <title>Faculties</title>
</head>
<body>
    @include('layouts/navbar')
    <h1>Faculties List</h1>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Depatment</th>
            <th>Faculty ID</th>
        </tr>
        @foreach ($faculties as $f)
        <tr>
            <td>{{$f -> last_name}}, {{$f -> first_name}}</td>
            <td>{{$f -> department}}</td>
            <td>{{$f -> faculty_id}}</td>
        </tr>
        @endforeach
    </table>

    <h1>Faculties Data</h1>
    <h2>Department</h2>
    <table class="table">
        <tr>
            <th>Department</th>
            <th>Total Faculty</th>
        </tr>
        @foreach ($faculties_dept as $fd)
        <tr>
            <td>{{$fd -> department}}</td>
            <td>{{$fd -> total_faculty}}</td>
        </tr>
        @endforeach
    </table>

    <h2>Promotions</h2>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Academe Points</th>
        </tr>
        @foreach ($faculties_points as $fp)
        <tr>
            <td>{{$fp -> last_name}}, {{$fp -> first_name}} {{$fp -> last_name . ", " . $fp -> first_name}}</td>
            <td>{{$fp -> academe_points}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>