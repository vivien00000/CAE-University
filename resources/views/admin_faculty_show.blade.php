<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/admin_navbar')
    <script src="/js/admin.js"></script>
    <link rel="stylesheet" href="/css/admin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    @if ($faculty)
        <div class="card">
            <div class="card-body">
                <h2>Personal information</h2>
                <ul>
                    <li>Full name: {{$faculty->last_name}}, {{$faculty->first_name}}</li>
                    <li>Birthdate: {{$faculty->birthdate}}</li>
                    <li>Gender: {{$faculty->gender}}</li>
                </ul>
                <h2>Employment information</h2>
                <ul>
                    <li>Position: {{$faculty->position}}</li>
                    <li>Department: {{$faculty->department}}</li>
                    <li>Date entered: {{$faculty->date_entered}}</li>
                </ul>
                <h2>Contact information</h2>
                <ul>
                    <li>Mobile number: {{$faculty->mobile_number}}</li>
                    <li>Email address: {{$faculty->email_address}}</li>
                </ul>
            </div>
        </div>
    @endif
</body>
</html>
