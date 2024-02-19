<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/admin_navbar')
    <script src="/js/admin.js"></script>
    <link rel="stylesheet" href="/css/admin.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .editable-input {
            border: none;
            outline: none;
            background-color: transparent;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h2>Personal information</h2>
            <ul>
                <li>Full name: <input class="editable-input" type="text" value="{{$students->last_name}}, {{$students->first_name}}"></li>
                <li>Birthdate: <input class="editable-input" type="date" value="{{$students->birthdate}}"></li>
                <li>Gender: <input class="editable-input" type="text" value="{{$students->gender}}"></li>
                <li>Year Level: <input class="editable-input" type="text" value="{{$students->year_level}}"></li>
                <li>Department: <input class="editable-input" type="text" value="{{$students->department}}"></li>
            </ul>
            <h2>Contact information</h2>
            <ul>
                <li>Mobile number: <input class="editable-input" type="tel" value="{{$students->mobile_number}}"></li>
                <li>Email address: <input class="editable-input" type="email" value="{{$students->email_address}}"></li>
            </ul>
        </div>
    </div>
</body>
</html>
