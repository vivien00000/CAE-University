<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts/head')
    @include('layouts/admin_navbar')
    <link rel="stylesheet" href="css/admin.css" />
    <title>Profile</title>
</head>

<body>
    @include('layouts/messages')
    <h1>My Profile</h1>
    <p>Student ID: {{$student->student_id}}</p>
    @if ($profile_picture)
    <img src="img/user_profiles/{{$profile_picture->image}}" alt="Profile Picture" width="100px" /><br />
    @else
    <img src="https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/no-profile-picture-icon.png" alt="Blank Profile Picture" width="100px" /><br />
    @endif
    <a href="/profile/upload" class="btn btn-success mt-2">Upload Profile Picture</a>
    <h2>Personal Information</h2>
    <ul>
        <li>Full Name: {{$student->last_name}}, {{$student->first_name}}</li>
        <li>Birthdate: {{date_format($student->birthdate, 'Y-m-d')}}</li>
        <li>Gender: {{$student->gender}}</li>
        <li>Province: {{$student->province}}</li>
    </ul>
    <h2>Enrollment Information</h2>
    <ul>
        <li>Year Level: {{$student->year_level}}</li>
        <li>Date Enrolled: {{date_format($student->date_enrolled, 'Y-m-d')}}</li>
    </ul>
    <h2>Contact Information</h2>
    <ul>
        <li>Mobile Number: {{$student->mobile_number}}</li>
        <li>Email Address: {{$student->email_address}}</li>
    </ul>
    <h1>Your Classes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Class ID</th>
                <th>Name of Subject</th>
                <th>Schedule</th>
                <th>Room</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $c)
            <tr>
                <td>{{$c->class_id}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->schedule}}</td>
                <td>{{$c->room}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('layouts/footer')
</body>

</html>
