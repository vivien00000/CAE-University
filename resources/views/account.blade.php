<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    @include('layouts/admin_navbar')
    <script src="js/admin.js"></script>
    <link rel="stylesheet" href="css/admin.css"/>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <title>Profile</title>
</head>

<body>
    @include('layouts/messages')
    <h1>My Profile</h1>
    <p>Student ID: {{$student -> student_id}}</p>
    @if ($profile_picture)
    <img src="img/user_profiles/{{$profile_picture -> image}}" alt="blank profile picture" width="100px" /><br />
    @else
    <img src="https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/no-profile-picture-icon.png" alt="blank profile picture" width="100px" /><br />
    @endif
    <a href="/profile/upload" class="btn btn-success mt-2">Upload profile picture</a>
    <h2>Personal information</h2>
    <ul>
        <li>Full name: {{$student -> last_name}}, {{$student -> first_name}}</li>
        <li>Birthdate: {{date_format($student -> birthdate, 'Y-m-d')}}</li>
        <li>Gender: {{$student -> gender}}</li>
        <li>Province: {{$student -> province}}</li>
    </ul>
    <h2>Enrollment information</h2>
    <ul>
        <li>Year level: {{$student -> year_level}}</li>
        <li>Date enrolled: {{date_format($student -> date_enrolled, 'Y-m-d')}}</li>
    </ul>
    <h2>Contact information</h2>
    <ul>
        <li>Mobile number: {{$student -> mobile_number}}</li>
        <li>Email address: {{$student -> email_address}}</li>
    </ul>
    <h1>Your Classes</h1>
    <table class="table">
        <tr>
            <th>Class ID</th>
            <th>Name of Subject</th>
            <th>Schedule</th>
            <th>Room</th>
        </tr>
        @foreach ($classes as $c)
        <tr>
            <td>{{$c -> class_id}}</td>
            <td>{{$c -> name}}</td>
            <td>{{$c -> schedule}}</td>
            <td>{{$c -> room}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
